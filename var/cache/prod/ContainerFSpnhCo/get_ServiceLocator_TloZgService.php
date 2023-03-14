<?php

namespace ContainerFSpnhCo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TloZgService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Tlo_zg_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Tlo_zg_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allergy' => ['privates', '.errored..service_locator.Tlo_zg_.App\\Entity\\Allergy', NULL, 'Cannot autowire service ".service_locator.Tlo_zg_": it needs an instance of "App\\Entity\\Allergy" but this type has been excluded in "config/services.yaml".'],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'allergy' => 'App\\Entity\\Allergy',
            'doctrine' => '?',
        ]);
    }
}