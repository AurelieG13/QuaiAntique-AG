<?php

namespace ContainerFSpnhCo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserAuthenticatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\UserAuthenticator' shared autowired service.
     *
     * @return \App\Security\UserAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Security\\UserAuthenticator'] = new \App\Security\UserAuthenticator(($container->services['router'] ?? $container->getRouterService()));
    }
}
