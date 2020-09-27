<?php


namespace KnpU\LoremIpsumBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $node = $treeBuilder->root('knpu_lorem_ipsum');
        $node->children()
            ->booleanNode('unicon_real')->defaultTrue()->end()
            ->integerNode('min_sunshine')->defaultValue(7)->end()
            ->scalarNode('word_provider')->defaultNull()->end()
            ->end();
        return $treeBuilder;
    }

}