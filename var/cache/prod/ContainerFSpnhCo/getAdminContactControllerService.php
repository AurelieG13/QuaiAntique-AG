<?php

namespace ContainerFSpnhCo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminContactControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\AdminContactController' shared autowired service.
     *
     * @return \App\Controller\Admin\AdminContactController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\AdminContactController'] = $instance = new \App\Controller\Admin\AdminContactController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\Admin\\AdminContactController', $container));

        return $instance;
    }
}