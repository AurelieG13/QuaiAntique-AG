<?php

namespace ContainerFSpnhCo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMenuControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\MenuController' shared autowired service.
     *
     * @return \App\Controller\MenuController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\MenuController'] = $instance = new \App\Controller\MenuController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\MenuController', $container));

        return $instance;
    }
}
