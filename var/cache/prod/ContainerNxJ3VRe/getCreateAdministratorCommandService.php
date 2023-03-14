<?php

namespace ContainerNxJ3VRe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateAdministratorCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Command\CreateAdministratorCommand' shared autowired service.
     *
     * @return \App\Command\CreateAdministratorCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\Command\\CreateAdministratorCommand'] = $instance = new \App\Command\CreateAdministratorCommand(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setName('app:create-administrator');
        $instance->setDescription('Create an administrator');

        return $instance;
    }
}
