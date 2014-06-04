<?php

namespace Ticketpark\PingenBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ticketpark_pingen');

        $rootNode
            ->children()
                ->scalarNode('token')
                    ->isRequired()
                    ->cannotBeEmpty()
                    ->info('Your pingen api token')
                ->end()
                ->booleanNode('staging')
                    ->defaultFalse()
                    ->info('Defines whether to use the pingen api in staging mode or not')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
