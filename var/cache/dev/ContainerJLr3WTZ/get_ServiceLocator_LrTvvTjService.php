<?php

namespace ContainerJLr3WTZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LrTvvTjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lrTvvTj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lrTvvTj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'menu' => ['privates', '.errored..service_locator.lrTvvTj.App\\Entity\\Menu', NULL, 'Cannot autowire service ".service_locator.lrTvvTj": it needs an instance of "App\\Entity\\Menu" but this type has been excluded in "config/services.yaml".'],
            'pictureService' => ['privates', 'App\\Service\\PictureService', 'getPictureServiceService', true],
        ], [
            'doctrine' => '?',
            'menu' => 'App\\Entity\\Menu',
            'pictureService' => 'App\\Service\\PictureService',
        ]);
    }
}
