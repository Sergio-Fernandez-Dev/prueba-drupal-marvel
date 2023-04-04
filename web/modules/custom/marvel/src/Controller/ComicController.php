<?php

namespace Drupal\marvel\Controller;


use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Connection;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

class ComicController extends ControllerBase
{
    protected $connection;

    public function __construct(Connection $connection) {
        $this->connection = $connection;
    }

    public static function create(ContainerInterface $container) {
        return new static(
            $container->get('database')
        );
    }

    public function index($user) {


        $result = $this->connection->query('SELECT * FROM {comics} WHERE uuid = :uuid', [
                'uuid' => 1,
            ])
                ->fetchAll();


        $build = [];
        $build['first'] = [
            '#markup' => 'Primer texto'
        ];
        $build['second'] = [
            '#markup' => 'Segundo texto ' . $user,
        ];
        return $build;
    }

    public function store($user) {
        $build = [];
        $build['first'] = [
            '#markup' => 'Primer texto' . $user,
        ];
        $build['second'] = [
            '#markup' => 'Segundo texto'
        ];
        return $build;
    }
}