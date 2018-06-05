<?php

namespace Shapecode\Bundle\ShapecodeMonologGDPRBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

/**
 * Class ShapecodeMonologGDPRExtension
 *
 * @package Shapecode\Bundle\ShapecodeMonologGDPRBundle\DependencyInjection
 * @author  Nikita Loges
 */
class ShapecodeMonologGDPRExtension extends ConfigurableExtension
{
    /**
     * @inheritDoc
     */
    protected function loadInternal(array $config, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');
    }
}
