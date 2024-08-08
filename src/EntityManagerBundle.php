<?php

namespace Untek\Model\EntityManager;

use Symfony\Component\DependencyInjection\ChildDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Untek\Model\EntityManager\Attribute\AsEntityRepository;

class EntityManagerBundle extends AbstractBundle
{

    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $builder->registerAttributeForAutoconfiguration(AsEntityRepository::class, static function (ChildDefinition $definition, AsEntityRepository $attribute): void {
            $definition->addTag('repository');
        });

        $container->import(__DIR__ . '/resources/config/services/entity-manager.php');
    }
}
