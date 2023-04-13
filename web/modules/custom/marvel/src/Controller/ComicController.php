<?php

/**
 * @file
 * Contains \Drupal\marvel\Controller\ComicController.
 */
namespace Drupal\marvel\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\marvel\Entity\Comic;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller class for managing Marvel comics.
 */
class ComicController extends ControllerBase
{
    /**
   * Returns a JSON response with the list of comics associated with the current user.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   The JSON response containing the list of comic IDs.
   */
    public function index()
    {
        $user = $this->entityTypeManager()->getStorage('user')->load($this->currentUser()->id());
        $comicList = $this->entityTypeManager()->getStorage('marvel_comic')->loadByProperties(['users' => [$user->id()]]);
        $result = array_keys($comicList);

        return new JsonResponse($result);
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