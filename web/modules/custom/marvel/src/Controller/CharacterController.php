<?php

namespace Drupal\marvel\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\marvel\Entity\Character;
use Symfony\Component\HttpFoundation\Response;
use Drupal\Core\Database\Connection;
use Symfony\Component\DependencyInjection\ContainerInterface;

class CharacterController extends ControllerBase
{

    protected $connection;

    public function __construct(Connection $connection) 
    {
        $this->connection = $connection;
    }

    public static function create(ContainerInterface $container) 
    {
        return new static(
            $container->get('database'),
        );
    }
    public function index()
    {
        echo 'Character Controller';
    }

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

    public function delete($id) {
 
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