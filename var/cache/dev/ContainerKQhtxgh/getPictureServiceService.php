<?php

namespace ContainerKQhtxgh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPictureServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\PictureService' shared autowired service.
     *
     * @return \App\Service\PictureService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PictureService.php';

        return $container->privates['App\\Service\\PictureService'] = new \App\Service\PictureService(($container->privates['parameter_bag'] ??= new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container)));
    }
}