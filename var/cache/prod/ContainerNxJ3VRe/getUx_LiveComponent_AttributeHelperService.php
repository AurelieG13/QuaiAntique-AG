<?php

namespace ContainerNxJ3VRe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_AttributeHelperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'ux.live_component.attribute_helper' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Util\TwigAttributeHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['twig'] ?? $container->load('getTwigService'));

        if (isset($container->privates['ux.live_component.attribute_helper'])) {
            return $container->privates['ux.live_component.attribute_helper'];
        }

        return $container->privates['ux.live_component.attribute_helper'] = new \Symfony\UX\LiveComponent\Util\TwigAttributeHelper($a);
    }
}
