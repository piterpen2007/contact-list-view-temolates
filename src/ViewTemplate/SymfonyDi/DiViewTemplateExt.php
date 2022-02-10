<?php

namespace EfTech\ContactList\Infrastructure\ViewTemplate\SymfonyDi;

use Exception;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class DiViewTemplateExt implements \Symfony\Component\DependencyInjection\Extension\ExtensionInterface
{
    /**
     * @inheritDoc
     * @throws Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $processor = new Processor();
        $config = $processor->processConfiguration(new DiViewTemplateConfigurator(), $configs);
        $loader = new XmlFileLoader(
            $container,
            new FileLocator()
        );
        $loader->load(__DIR__ . '/di.xml');
    }

    /**
     * @inheritDoc
     */
    public function getNamespace(): string
    {
        return 'https://effective-group.ru/schema/dic/eff_tech_infrastructure_view_template';
    }

    /**
     * @inheritDoc
     */
    public function getXsdValidationBasePath()
    {
        return __DIR__ . '/viewTemplate.di.config.xsd';
    }

    /**
     * @inheritDoc
     */
    public function getAlias(): string
    {
        return 'e_vtmplt';
    }
}
