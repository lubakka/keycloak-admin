<?php declare(strict_types=1);

namespace Lubakka\KeycloakAdmin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('keycloak_admin');

        $rootNode = $treeBuilder->getRootNode();
        $rootNode->children()
                ->booleanNode('option1')->defaultTrue()->end()
                ->scalarNode('option2')->defaultValue('default_value')->end()
            ->end();

        return $treeBuilder;
    }
}