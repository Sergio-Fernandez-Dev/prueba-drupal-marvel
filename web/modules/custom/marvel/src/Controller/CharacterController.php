<?php

namespace Drupal\marvel\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\marvel\Entity\Character;
use Symfony\Component\HttpFoundation\Response;

class CharacterController extends ControllerBase
{
    public function index()
    {
        echo 'Character Controller';
    }

    /**
   * @param Request $request
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   */
    public function store(Request $request)
    {               
        $data = json_decode($request->getContent(), true);
        $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());

        $character = Character::create([
            'character_id' => $data['id'],          
            'users' => $user,
        ]);

        $character->save();

        return new JsonResponse(Response::HTTP_OK);
    }
}