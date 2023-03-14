<?php

namespace ContainerKQhtxgh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KjIXMoSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kjIXMoS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kjIXMoS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'formule' => ['privates', '.errored..service_locator.kjIXMoS.App\\Entity\\Formule', NULL, 'Cannot autowire service ".service_locator.kjIXMoS": it needs an instance of "App\\Entity\\Formule" but this type has been excluded in "config/services.yaml".'],
        ], [
            'doctrine' => '?',
            'formule' => 'App\\Entity\\Formule',
        ]);
    }
}
