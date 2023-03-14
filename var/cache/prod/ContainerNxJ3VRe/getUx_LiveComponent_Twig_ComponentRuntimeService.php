<?php

namespace ContainerNxJ3VRe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_Twig_ComponentRuntimeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'ux.live_component.twig.component_runtime' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Twig\LiveComponentRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['ux.twig_component.component_factory'] ?? $container->load('getUx_TwigComponent_ComponentFactoryService'));

        if (isset($container->privates['ux.live_component.twig.component_runtime'])) {
            return $container->privates['ux.live_component.twig.component_runtime'];
        }

        return $container->privates['ux.live_component.twig.component_runtime'] = new \Symfony\UX\LiveComponent\Twig\LiveComponentRuntime(($container->privates['ux.live_component.component_hydrator'] ?? $container->load('getUx_LiveComponent_ComponentHydratorService')), $a, ($container->services['router'] ?? $container->getRouterService()));
    }
}
