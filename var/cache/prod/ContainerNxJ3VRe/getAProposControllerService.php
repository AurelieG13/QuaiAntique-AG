<?php

namespace ContainerNxJ3VRe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAProposControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AProposController' shared autowired service.
     *
     * @return \App\Controller\AProposController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AProposController'] = $instance = new \App\Controller\AProposController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\AProposController', $container));

        return $instance;
    }
}