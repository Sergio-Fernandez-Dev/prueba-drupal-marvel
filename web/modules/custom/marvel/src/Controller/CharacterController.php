<?php

/**
 * @file
 * Contains \Drupal\marvel\Controller\CharacterController.
 */


namespace Drupal\marvel\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\marvel\Entity\Character;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller class for managing Marvel characters.
 */
class CharacterController extends ControllerBase
{
    /**
   * Returns a JSON response with the list of characters associated with the current user.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   The JSON response containing the list of character IDs.
   */
    public function index()
    {
        $user = $this->entityTypeManager()->getStorage('user')->load($this->currentUser()->id());
        $characterList = $this->entityTypeManager()->getStorage('marvel_character')->loadByProperties(['users' => [$user->id()]]);
        $result = array_keys($characterList);

        return new JsonResponse($result);
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

        if ($index = array_search($user, $existingUsers)) {
            $character->get('users')->removeItem($index);
            $character->save();
        }

        if (empty($character->get('users'))) {
            $character->delete();
        }

        return new JsonResponse(Response::HTTP_OK);
    }
}