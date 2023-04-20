<?php

namespace Drupal\marvel\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\DependencyInjection\ClassResolverInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a custom block containing the output of a controller.
 *
 * @Block(
 *  id = "marvel_block",
 *  admin_label = @Translation("Marvel block"),
 * )
 */
class MarvelBlock extends BlockBase implements ContainerFactoryPluginInterface
{

    /**
     * Class Resolver service.
     *
     * @var \Drupal\Core\DependencyInjection\ClassResolverInterface
     */
    protected $classResolver;

    /**
     * Constructs a new MarvelBlock object.
     *
     * @param array $configuration
     *   A configuration array containing information about the plugin instance.
     * @param string $plugin_id
     *   The plugin_id for the plugin instance.
     * @param string $plugin_definition
     *   The plugin implementation definition.
     * @param \Drupal\Core\DependencyInjection\ClassResolverInterface $class_resolver
     *   The class resolver service.
     */
    public function __construct(
        array $configuration,
        $plugin_id,
        $plugin_definition,
        ClassResolverInterface $class_resolver
    ) {
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->classResolver = $class_resolver;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition)
    {
        return new static(
            $configuration,
            $plugin_id,
            $plugin_definition,
            $container->get('class_resolver')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $data = [];
        $characterController = $this->classResolver->getInstanceFromDefinition('\Drupal\marvel\Controller\CharacterController');
        $comicController = $this->classResolver->getInstanceFromDefinition('\Drupal\marvel\Controller\ComicController');
        $data['characters'] = $characterController->getAll();
        $data['comics'] = $comicController->getAll();

        return [
            '#theme' => 'marvel-items-list',
            '#data' => $data,
        ];
    }

}