<?php

namespace ContainerQrNRWiu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Uf73EwLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uf73EwL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uf73EwL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'prd' => ['privates', '.errored..service_locator.uf73EwL.App\\Entity\\Prd', NULL, 'Cannot autowire service ".service_locator.uf73EwL": it needs an instance of "App\\Entity\\Prd" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'prd' => 'App\\Entity\\Prd',
        ]);
    }
}
