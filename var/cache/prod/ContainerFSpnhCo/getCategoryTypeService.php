<?php

namespace ContainerFSpnhCo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\CategoryType' shared autowired service.
     *
     * @return \App\Form\CategoryType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\CategoryType'] = new \App\Form\CategoryType();
    }
}
