<?php

/**
 * @file
 * Contains \Drupal\marvel\Controller\ComicController.
 */
namespace Drupal\marvel\Controller;

use Drupal\Core\Controller\ControllerBase;
use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\marvel\Entity\Comic;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller class for managing Marvel comics.
 */
class ComicController extends ControllerBase
{
    /*
     * Displays Marvel View.
     *
     * @return array
     *   The render array for the view output.
     */
    public function getAll()
    {
        $url = 'https://gateway.marvel.com/v1/public/comics?ts=1&apikey=e8960442b278be0f6285586922d9e4e4&hash=a31a5f679419eb7125fa9c0fc3462def';
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
        $data['category'] = 'comics';
        $data['response'] = $result;
        $data['favorites'] = $favorites;
        $data['favorites']['endpoint'] = 'marvel/favorites/comics';

        return [
            '#theme' => 'marvel-items-list',
            '#data' => $data,
        ];
    }

    /**
     * Returns the list of comics associated with the current user.
     *
     * 
     */
    public function getFavoritesIds()
    {
        $user = $this->entityTypeManager()->getStorage('user')->load($this->currentUser()->id());
        $comicList = $this->entityTypeManager()->getStorage('marvel_comic')->loadByProperties(['users' => [$user->id()]]);

        return $comicList;
    }

    public function getAllFavorites()
    {
        $url = 'https://gateway.marvel.com/v1/public/comics?ts=1&apikey=e8960442b278be0f6285586922d9e4e4&hash=a31a5f679419eb7125fa9c0fc3462def';
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
        $data['category'] = 'comics';
        $data['response'] = $result;
        $data['favorites'] = $favorites;
        $data['favorites']['endpoint'] = 'marvel/favorites/comics';

        return [
            '#theme' => 'marvel-favorites-list',
            '#data' => $data,
        ];
    }

    /**
   * Stores a Marvel comic associated with the current user.
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
        $comic = $this->entityTypeManager()->getStorage('marvel_comic')->load($data['id']);

        if (!$comic) {
            $comic = Comic::create([
                'comic_id' => $data['id'],
                'users' => $user,
            ]);
        }

        $existingUsers = $comic->get('users')->referencedEntities();

        if (!in_array($user, $existingUsers)) {
            $comic->get('users')->appendItem($user);
        }

        $comic->save();

        return new JsonResponse(Response::HTTP_OK);
    }

    /**
   * Deletes a Marvel comic associated with the current user.
   *
   * @param int $id
   *   The ID of the comic to be deleted.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   The JSON response indicating the success of the operation.
   */
    public function delete($id)
    {
        $user = $this->entityTypeManager()->getStorage('user')->load($this->currentUser()->id());
        $comic = $this->entityTypeManager()->getStorage('marvel_comic')->load($id);

        $existingUsers = $comic->get('users')->referencedEntities();

        $index = array_search($user, $existingUsers);

        if (isset($index)) {
            $comic->get('users')->removeItem($index);
            $comic->save();
        }

        if (empty($comic->get('users'))) {
            $comic->delete();
        }

        return new JsonResponse(Response::HTTP_OK);
    }
}