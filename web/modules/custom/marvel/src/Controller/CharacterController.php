<?php

/**
 * @file
 * Contains \Drupal\marvel\Controller\CharacterController.
 */


namespace Drupal\marvel\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\marvel\Entity\Character;
use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller class for managing Marvel characters.
 */
class CharacterController extends ControllerBase
{
    const API_VERSION = 'v1';
    const ENDPOINT = 'public/characters';

    /*
     * Displays a list of Marvel characters.
     *
     * @return array
     *   The data that should be passed to the template.
     */
    public function getAll()
    {
        $url = $this->getUrl();
        $client = new Client();

        try {
            
            $response = $client->get($url);
            $body = $response->getBody();
            $result = json_decode($body, true);       
            
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        
        $favorites = $this->getFavoritesAsEntities();
        $data = [];
        $data['response'] = $result;
        $data['favorites'] = $favorites;
        $data['favorites']['endpoint'] = 'marvel/favorites/characters';

        return $data;
    }

    public function getAllFavorites()
    {
        $data = $this->getAll();
        $favorites = $this->getFavoritesAsEntities();
        $characterIds = [];
    
        foreach ($favorites as $character) {
            $characterIds[] = $character->id();
        }

        foreach ($data['response']['data']['results'] as $key => $item) {
            if (!in_array($item['id'], $characterIds)) {
                unset($data['response']['data']['results'][$key]);
            }
        }

        return $data;    
    }

    /**
     * Stores a Marvel character associated with the current user.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *   The HTTP request object.
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     *   The JSON response indicating the success of the operation.
     */
    public function store(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $user = $this->entityTypeManager()->getStorage('user')->load($this->currentUser()->id());
        $character = $this->entityTypeManager()->getStorage('marvel_character')->load($data['id']);

        if (!$character) {
            $character = Character::create([
                'id' => $data['id'],
                'users' => $user,
            ]);
        }

        $existingUsers = $character->get('users')->referencedEntities();

        if (!in_array($user, $existingUsers)) {
            $character->get('users')->appendItem($user);
        }
        
        $character->save();

        return new JsonResponse(Response::HTTP_OK);
    }

    /**
     * Deletes a Marvel character associated with the current user.
     *
     * @param int $id
     *   The ID of the character to be deleted.
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     *   The JSON response indicating the success of the operation.
     */
    public function delete($id)
    {
        $user = $this->entityTypeManager()->getStorage('user')->load($this->currentUser()->id());
        $character = $this->entityTypeManager()->getStorage('marvel_character')->load($id);

        $existingUsers = $character->get('users')->referencedEntities();

        $index = array_search($user, $existingUsers);

        if (isset($index)) {
            $character->get('users')->removeItem($index);
            $character->save();
        }

        if (count($character->get('users')) == 0) {
            $character->delete();
        }

        return new JsonResponse(Response::HTTP_OK);
    }

    /**
     * Returns the list of characters associated with the current user.
     */
    private function getFavoritesAsEntities()
    {
        $user = $this->entityTypeManager()->getStorage('user')->load($this->currentUser()->id());
        $characterList = $this->entityTypeManager()->getStorage('marvel_character')->loadByProperties(['users' => [$user->id()]]);
       
        return $characterList;
    }

    private function getUrl() 
    {
        $key = $this->entityTypeManager()
            ->getStorage('marvel_api_key')
            ->loadByProperties([
                'api_version' => self::API_VERSION,
                'endpoint' => self::ENDPOINT,
            ]);
        // get the first element    
        $firstElement = reset($key);
        
        $url = $firstElement->get('url')->getString();
        
        return $url;
    }
}