<?php

namespace ContainerYNWTaMl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTicketTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\TicketType' shared autowired service.
     *
     * @return \App\Form\TicketType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/TicketType.php';

        return $container->privates['App\\Form\\TicketType'] = new \App\Form\TicketType();
    }
}