<?php

namespace ContainerNxJ3VRe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\AdminController' shared autowired service.
     *
     * @return \App\Controller\Admin\AdminController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\AdminController'] = $instance = new \App\Controller\Admin\AdminController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\Admin\\AdminController', $container));

        return $instance;
    }
}
