<?php

namespace ContainerNxJ3VRe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDishRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\DishRepository' shared autowired service.
     *
     * @return \App\Repository\DishRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\DishRepository'] = new \App\Repository\DishRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
