<?php

namespace Untek\Model\EntityManager;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;use Untek\Model\Cqrs\Application\Abstract\CqrsHandlerInterface;
use Doctrine\Persistence\ObjectRepository;

class EntityManagerBundle extends AbstractBundle
{

    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
//        $builder->registerForAutoconfiguration(ObjectRepository::class)
//            ->addTag('repository');

        $container->import(__DIR__ . '/resources/config/services/entity-manager.php');
    }
}
