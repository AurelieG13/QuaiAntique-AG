<?php

namespace ContainerNxJ3VRe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminUserControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\AdminUserController' shared autowired service.
     *
     * @return \App\Controller\Admin\AdminUserController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\AdminUserController'] = $instance = new \App\Controller\Admin\AdminUserController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\Admin\\AdminUserController', $container));

        return $instance;
    }
}
