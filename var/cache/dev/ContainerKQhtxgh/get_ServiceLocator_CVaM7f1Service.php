<?php

namespace ContainerKQhtxgh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CVaM7f1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CVaM7f1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CVaM7f1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'catRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'dishRepository' => ['privates', 'App\\Repository\\DishRepository', 'getDishRepositoryService', true],
        ], [
            'catRepository' => 'App\\Repository\\CategoryRepository',
            'dishRepository' => 'App\\Repository\\DishRepository',
        ]);
    }
}
