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

    private $characterController;
    private $comicController;


    /**
     * Constructs a new MarvelBlock object.
     *
     * @param array $configuration
     *   A configuration array containing information about the plugin instance.
     * @param string $plugin_id
     *   The plugin_id for the plugin instance.
     * @param string $plugin_definition
     *   The plugin implementation definition.
     * @param \Drupal\Core\DependencyInjection\ClassResolverInterface $classResolver
     *   The class resolver service.
     */
    public function __construct(
        array $configuration,
        $plugin_id,
        $plugin_definition,
        ClassResolverInterface $classResolver
    ) {
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->classResolver = $classResolver;
        $this->characterController = $this->getControllerInstance($this->classResolver,  $configuration['controllers']['character']['path']);
        $this->comicController = $this->getControllerInstance($this->classResolver,  $configuration['controllers']['comic']['path']);
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
        $data['characters'] = $this->characterController->{$this->configuration['controllers']['character']['method']}();
        $data['comics'] = $this->comicController->{$this->configuration['controllers']['comic']['method']}();

        return [
            '#theme' => 'marvel-items-list',
            '#data' => $data,
        ];
    }

    private function getControllerInstance(ClassResolverInterface $classResolver, $controllerPath)
    {
        return $classResolver->getInstanceFromDefinition($controllerPath);
    }

}