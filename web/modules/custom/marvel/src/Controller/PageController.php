<?php

/**
 * @file
 * Contains \Drupal\marvel\Controller\PageController.
 */
namespace Drupal\marvel\Controller;

use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Render\RendererInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PageController extends ControllerBase
{
    /** @var \Drupal\Component\Plugin\PluginManagerInterface*/
    protected $blockManager;

    /** @var \Drupal\Core\Render\RendererInterface*/
    protected $renderer;

    public function __construct(PluginManagerInterface $blockManager, RendererInterface $renderer)
    {
        $this->blockManager = $blockManager;
        $this->renderer = $renderer;
    }

    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get('plugin.manager.block'),
            $container->get('renderer')
        );
    }

    public function showMainPage()
    {
        $config = [
            'controllers' => [
                'character' => '\Drupal\marvel\Controller\CharacterController',
                'comic' => '\Drupal\marvel\Controller\ComicController'
            ],
        ];
        $pluginBlock = $this->blockManager->createInstance('marvel_block', $config);

        $render = $pluginBlock->build();      
        $this->renderer->addCacheableDependency($render, $pluginBlock);

        return $render;
    }

    public function showFavoritesPage()
    {

    }
}