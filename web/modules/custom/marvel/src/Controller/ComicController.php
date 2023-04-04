<?php

namespace Drupal\marvel\Controller;


use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Connection;
use Symfony\Component\DependencyInjection\ContainerInterface;

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

    public function index() {

        $nodeManager = $this->entityTypeManager()->getStorage('marvel_comic');

        $comic = $nodeManager->load(1);
        dpm($comic);

        $result = $this->connection->query('SELECT * FROM {comics} WHERE uuid = :uuid', [
                'uuid' => 1,
            ])
                ->fetchAll();


        $build = [];
        $build['first'] = [
            '#markup' => 'Primer texto'
        ];
        $build['second'] = [
            '#markup' => 'Segundo texto'
        ];
        return $build;
    }

    public function store() {

        if (!isset($_POST['comic'])) return;
        
        
        
    }
}