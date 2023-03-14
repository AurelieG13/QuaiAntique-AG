<?php

namespace ContainerFSpnhCo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_DeterministicIdCalculatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'ux.live_component.deterministic_id_calculator' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Twig\DeterministicTwigIdCalculator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['ux.live_component.deterministic_id_calculator'] = new \Symfony\UX\LiveComponent\Twig\DeterministicTwigIdCalculator();
    }
}
