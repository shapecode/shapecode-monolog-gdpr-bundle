<?php

namespace Shapecode\Bundle\ShapecodeMonologGDPRBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @package Shapecode\Bundle\ShapecodeMonologGDPRBundle\DependencyInjection
 * @author  Nikita Loges
 */
class Configuration implements ConfigurationInterface
{

    /**
     * @inheritdoc
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('shapecode_gdpr');

        return $treeBuilder;
    }

}
