<?php

namespace ContainerNxJ3VRe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QQgJuMXService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.qQgJuMX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qQgJuMX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'openingHoursRepository' => ['privates', 'App\\Repository\\OpeningHoursRepository', 'getOpeningHoursRepositoryService', true],
        ], [
            'openingHoursRepository' => 'App\\Repository\\OpeningHoursRepository',
        ]);
    }
}
