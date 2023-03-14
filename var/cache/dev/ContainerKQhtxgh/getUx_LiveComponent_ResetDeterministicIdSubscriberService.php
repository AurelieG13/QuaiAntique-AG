<?php

namespace ContainerKQhtxgh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_ResetDeterministicIdSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.reset_deterministic_id_subscriber' shared service.
     *
     * @return \Symfony\UX\LiveComponent\EventListener\ResetDeterministicIdSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ResetDeterministicIdSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'DeterministicTwigIdCalculator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ComponentStack.php';

        return $container->privates['ux.live_component.reset_deterministic_id_subscriber'] = new \Symfony\UX\LiveComponent\EventListener\ResetDeterministicIdSubscriber(($container->privates['ux.live_component.deterministic_id_calculator'] ??= new \Symfony\UX\LiveComponent\Twig\DeterministicTwigIdCalculator()), ($container->privates['ux.twig_component.component_stack'] ??= new \Symfony\UX\TwigComponent\ComponentStack()));
    }
}
