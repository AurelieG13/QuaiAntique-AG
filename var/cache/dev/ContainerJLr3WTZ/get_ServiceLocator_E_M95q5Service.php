<?php

namespace ContainerJLr3WTZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E_M95q5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.E.M95q5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.E.M95q5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'formuleRepository' => ['privates', 'App\\Repository\\FormuleRepository', 'getFormuleRepositoryService', true],
        ], [
            'formuleRepository' => 'App\\Repository\\FormuleRepository',
        ]);
    }
}
