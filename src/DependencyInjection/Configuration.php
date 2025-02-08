<?php declare(strict_types=1);

namespace Symfony\Bundle\MonologBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('keycloak_admin');

        $treeBuilder->getRootNode()
            ->children()
                ->booleanNode('option1')->defaultTrue()->end()
                ->scalarNode('option2')->defaultValue('default_value')->end()
            ->end();

        return $treeBuilder;
    }
}