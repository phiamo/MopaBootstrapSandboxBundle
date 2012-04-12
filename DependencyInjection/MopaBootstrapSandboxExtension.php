<?php

namespace Mopa\Bundle\BootstrapSandboxBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;

class MopaBootstrapSandboxExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
        $yamlloader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config/examples'));
        $yamlloader->load("example_menu.yml");
        $yamlloader->load("example_navbar.yml");
    }
    public function getAlias()
    {
        return 'mopa_bootstrap_sandbox';
    }
}
