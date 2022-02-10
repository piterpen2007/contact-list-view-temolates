<?php

namespace EfTech\ContactList\Infrastructure\ViewTemplate\SymfonyDi;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Структура конфига, отвечающего за ViewTemplate
 */

class DiViewTemplateConfigurator implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('e_vtmplt');
        $treeBuilder->getRootNode()
            ->ignoreExtraKeys(false)
            ->end();
        return $treeBuilder;
    }
}
