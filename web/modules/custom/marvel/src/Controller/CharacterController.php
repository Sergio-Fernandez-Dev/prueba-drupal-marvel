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
    /*
     * Displays Marvel View.
     *
     * @return array
     *   The render array for the view output.
     */
    public function getAll()
    {
        $url = 'https://gateway.marvel.com/v1/public/characters?ts=1&apikey=e8960442b278be0f6285586922d9e4e4&hash=a31a5f679419eb7125fa9c0fc3462def';
        $client = new Client();

        try {
            
            $response = $client->get($url);
            $body = $response->getBody();
            $result = json_decode($body, true);       
            $favorites = $this->getFavoritesIds();
            
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        $data = [];
        $data['response'] = $result;
        $data['favorites'] = $favorites;
        $data['favorites']['endpoint'] = 'marvel/favorites/characters';

        return $data;
    }

    public function getAllFavorites()
    {
        $data = $this->getAll();
        $itemList = $data['response']['data']['results'];
        $favorites = $this->getFavoritesIds();

        foreach ($itemList as $key => $item) {
            if (!in_array($item['id'], $favorites)) {
                unset($itemList[$key]);
            }
        }

        return $itemList;      
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
                'character_id' => $data['id'],
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
    public function getFavoritesIds()
    {
        $user = $this->entityTypeManager()->getStorage('user')->load($this->currentUser()->id());
        $characterList = $this->entityTypeManager()->getStorage('marvel_character')->loadByProperties(['users' => [$user->id()]]);

        return $characterList;
    }
}