<?php

namespace ContainerNxJ3VRe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\AdminAllergyController::addAllergy' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\Admin\\AdminAllergyController::deleteAllergy' => ['privates', '.service_locator.Tlo_zg_', 'get_ServiceLocator_TloZgService', true],
            'App\\Controller\\Admin\\AdminAllergyController::editAllergy' => ['privates', '.service_locator.Tlo_zg_', 'get_ServiceLocator_TloZgService', true],
            'App\\Controller\\Admin\\AdminAllergyController::index' => ['privates', '.service_locator.p3G.R6j', 'get_ServiceLocator_P3G_R6jService', true],
            'App\\Controller\\Admin\\AdminCategoryController::addCategory' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\Admin\\AdminCategoryController::deleteCategory' => ['privates', '.service_locator.yy5cnku', 'get_ServiceLocator_Yy5cnkuService', true],
            'App\\Controller\\Admin\\AdminCategoryController::editCategory' => ['privates', '.service_locator.yy5cnku', 'get_ServiceLocator_Yy5cnkuService', true],
            'App\\Controller\\Admin\\AdminCategoryController::index' => ['privates', '.service_locator.3opkxl5', 'get_ServiceLocator_3opkxl5Service', true],
            'App\\Controller\\Admin\\AdminContactController::list' => ['privates', '.service_locator.RT2MYic', 'get_ServiceLocator_RT2MYicService', true],
            'App\\Controller\\Admin\\AdminDishController::activeHome' => ['privates', '.service_locator.5Ap4bXn', 'get_ServiceLocator_5Ap4bXnService', true],
            'App\\Controller\\Admin\\AdminDishController::addDish' => ['privates', '.service_locator.YKrE6vB', 'get_ServiceLocator_YKrE6vBService', true],
            'App\\Controller\\Admin\\AdminDishController::deleteDish' => ['privates', '.service_locator.5Ap4bXn', 'get_ServiceLocator_5Ap4bXnService', true],
            'App\\Controller\\Admin\\AdminDishController::deleteImage' => ['privates', '.service_locator.PEwCPil', 'get_ServiceLocator_PEwCPilService', true],
            'App\\Controller\\Admin\\AdminDishController::editDish' => ['privates', '.service_locator.d86f.Aj', 'get_ServiceLocator_D86f_AjService', true],
            'App\\Controller\\Admin\\AdminDishController::index' => ['privates', '.service_locator.jSRi6YF', 'get_ServiceLocator_JSRi6YFService', true],
            'App\\Controller\\Admin\\AdminFormuleController::addFormule' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\Admin\\AdminFormuleController::deleteFormule' => ['privates', '.service_locator.kjIXMoS', 'get_ServiceLocator_KjIXMoSService', true],
            'App\\Controller\\Admin\\AdminFormuleController::editFormule' => ['privates', '.service_locator.kjIXMoS', 'get_ServiceLocator_KjIXMoSService', true],
            'App\\Controller\\Admin\\AdminFormuleController::listFormule' => ['privates', '.service_locator.E.M95q5', 'get_ServiceLocator_E_M95q5Service', true],
            'App\\Controller\\Admin\\AdminHoursController::addHours' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\Admin\\AdminHoursController::deleteHours' => ['privates', '.service_locator.pf_lk_O', 'get_ServiceLocator_PfLkOService', true],
            'App\\Controller\\Admin\\AdminHoursController::duplicateHours' => ['privates', '.service_locator.pf_lk_O', 'get_ServiceLocator_PfLkOService', true],
            'App\\Controller\\Admin\\AdminHoursController::editHours' => ['privates', '.service_locator.pf_lk_O', 'get_ServiceLocator_PfLkOService', true],
            'App\\Controller\\Admin\\AdminHoursController::index' => ['privates', '.service_locator.qQgJuMX', 'get_ServiceLocator_QQgJuMXService', true],
            'App\\Controller\\Admin\\AdminMenuController::addMenu' => ['privates', '.service_locator.YKrE6vB', 'get_ServiceLocator_YKrE6vBService', true],
            'App\\Controller\\Admin\\AdminMenuController::deleteImage' => ['privates', '.service_locator.PEwCPil', 'get_ServiceLocator_PEwCPilService', true],
            'App\\Controller\\Admin\\AdminMenuController::deleteMenu' => ['privates', '.service_locator.EiVABgt', 'get_ServiceLocator_EiVABgtService', true],
            'App\\Controller\\Admin\\AdminMenuController::editMenu' => ['privates', '.service_locator.lrTvvTj', 'get_ServiceLocator_LrTvvTjService', true],
            'App\\Controller\\Admin\\AdminMenuController::listMenu' => ['privates', '.service_locator.tlBnDBh', 'get_ServiceLocator_TlBnDBhService', true],
            'App\\Controller\\Admin\\AdminRestaurantController::addRestaurant' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\Admin\\AdminRestaurantController::deleteMenu' => ['privates', '.service_locator.1EwW_nA', 'get_ServiceLocator_1EwWNAService', true],
            'App\\Controller\\Admin\\AdminRestaurantController::editRestaurant' => ['privates', '.service_locator.1EwW_nA', 'get_ServiceLocator_1EwWNAService', true],
            'App\\Controller\\Admin\\AdminRestaurantController::listRestaurant' => ['privates', '.service_locator.XdnbiXt', 'get_ServiceLocator_XdnbiXtService', true],
            'App\\Controller\\Admin\\AdminUserController::addAdmin' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\Admin\\AdminUserController::addManager' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\Admin\\AdminUserController::delete' => ['privates', '.service_locator.j.xg0Ku', 'get_ServiceLocator_J_Xg0KuService', true],
            'App\\Controller\\Admin\\AdminUserController::editUserAdmin' => ['privates', '.service_locator.j.xg0Ku', 'get_ServiceLocator_J_Xg0KuService', true],
            'App\\Controller\\Admin\\AdminUserController::index' => ['privates', '.service_locator.lDw5jgg', 'get_ServiceLocator_LDw5jggService', true],
            'App\\Controller\\CategoryController::index' => ['privates', '.service_locator.3opkxl5', 'get_ServiceLocator_3opkxl5Service', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\DishController::index' => ['privates', '.service_locator.CVaM7f1', 'get_ServiceLocator_CVaM7f1Service', true],
            'App\\Controller\\FooterController::opening' => ['privates', '.service_locator.Y6_HEag', 'get_ServiceLocator_Y6HEagService', true],
            'App\\Controller\\MainController::index' => ['privates', '.service_locator.jSRi6YF', 'get_ServiceLocator_JSRi6YFService', true],
            'App\\Controller\\MenuController::index' => ['privates', '.service_locator.tlBnDBh', 'get_ServiceLocator_TlBnDBhService', true],
            'App\\Controller\\ProfileController::editUser' => ['privates', '.service_locator.YKrE6vB', 'get_ServiceLocator_YKrE6vBService', true],
            'App\\Controller\\ProfileController::editUserAllergy' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.xVV8u.q', 'get_ServiceLocator_XVV8u_QService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.1Z9fEX7', 'get_ServiceLocator_1Z9fEX7Service', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.EE0.cm9', 'get_ServiceLocator_EE0_Cm9Service', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.Z9ydiC1', 'get_ServiceLocator_Z9ydiC1Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Admin\\AdminAllergyController:addAllergy' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\Admin\\AdminAllergyController:deleteAllergy' => ['privates', '.service_locator.Tlo_zg_', 'get_ServiceLocator_TloZgService', true],
            'App\\Controller\\Admin\\AdminAllergyController:editAllergy' => ['privates', '.service_locator.Tlo_zg_', 'get_ServiceLocator_TloZgService', true],
            'App\\Controller\\Admin\\AdminAllergyController:index' => ['privates', '.service_locator.p3G.R6j', 'get_ServiceLocator_P3G_R6jService', true],
            'App\\Controller\\Admin\\AdminCategoryController:addCategory' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\Admin\\AdminCategoryController:deleteCategory' => ['privates', '.service_locator.yy5cnku', 'get_ServiceLocator_Yy5cnkuService', true],
            'App\\Controller\\Admin\\AdminCategoryController:editCategory' => ['privates', '.service_locator.yy5cnku', 'get_ServiceLocator_Yy5cnkuService', true],
            'App\\Controller\\Admin\\AdminCategoryController:index' => ['privates', '.service_locator.3opkxl5', 'get_ServiceLocator_3opkxl5Service', true],
            'App\\Controller\\Admin\\AdminContactController:list' => ['privates', '.service_locator.RT2MYic', 'get_ServiceLocator_RT2MYicService', true],
            'App\\Controller\\Admin\\AdminDishController:activeHome' => ['privates', '.service_locator.5Ap4bXn', 'get_ServiceLocator_5Ap4bXnService', true],
            'App\\Controller\\Admin\\AdminDishController:addDish' => ['privates', '.service_locator.YKrE6vB', 'get_ServiceLocator_YKrE6vBService', true],
            'App\\Controller\\Admin\\AdminDishController:deleteDish' => ['privates', '.service_locator.5Ap4bXn', 'get_ServiceLocator_5Ap4bXnService', true],
            'App\\Controller\\Admin\\AdminDishController:deleteImage' => ['privates', '.service_locator.PEwCPil', 'get_ServiceLocator_PEwCPilService', true],
            'App\\Controller\\Admin\\AdminDishController:editDish' => ['privates', '.service_locator.d86f.Aj', 'get_ServiceLocator_D86f_AjService', true],
            'App\\Controller\\Admin\\AdminDishController:index' => ['privates', '.service_locator.jSRi6YF', 'get_ServiceLocator_JSRi6YFService', true],
            'App\\Controller\\Admin\\AdminFormuleController:addFormule' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\Admin\\AdminFormuleController:deleteFormule' => ['privates', '.service_locator.kjIXMoS', 'get_ServiceLocator_KjIXMoSService', true],
            'App\\Controller\\Admin\\AdminFormuleController:editFormule' => ['privates', '.service_locator.kjIXMoS', 'get_ServiceLocator_KjIXMoSService', true],
            'App\\Controller\\Admin\\AdminFormuleController:listFormule' => ['privates', '.service_locator.E.M95q5', 'get_ServiceLocator_E_M95q5Service', true],
            'App\\Controller\\Admin\\AdminHoursController:addHours' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\Admin\\AdminHoursController:deleteHours' => ['privates', '.service_locator.pf_lk_O', 'get_ServiceLocator_PfLkOService', true],
            'App\\Controller\\Admin\\AdminHoursController:duplicateHours' => ['privates', '.service_locator.pf_lk_O', 'get_ServiceLocator_PfLkOService', true],
            'App\\Controller\\Admin\\AdminHoursController:editHours' => ['privates', '.service_locator.pf_lk_O', 'get_ServiceLocator_PfLkOService', true],
            'App\\Controller\\Admin\\AdminHoursController:index' => ['privates', '.service_locator.qQgJuMX', 'get_ServiceLocator_QQgJuMXService', true],
            'App\\Controller\\Admin\\AdminMenuController:addMenu' => ['privates', '.service_locator.YKrE6vB', 'get_ServiceLocator_YKrE6vBService', true],
            'App\\Controller\\Admin\\AdminMenuController:deleteImage' => ['privates', '.service_locator.PEwCPil', 'get_ServiceLocator_PEwCPilService', true],
            'App\\Controller\\Admin\\AdminMenuController:deleteMenu' => ['privates', '.service_locator.EiVABgt', 'get_ServiceLocator_EiVABgtService', true],
            'App\\Controller\\Admin\\AdminMenuController:editMenu' => ['privates', '.service_locator.lrTvvTj', 'get_ServiceLocator_LrTvvTjService', true],
            'App\\Controller\\Admin\\AdminMenuController:listMenu' => ['privates', '.service_locator.tlBnDBh', 'get_ServiceLocator_TlBnDBhService', true],
            'App\\Controller\\Admin\\AdminRestaurantController:addRestaurant' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\Admin\\AdminRestaurantController:deleteMenu' => ['privates', '.service_locator.1EwW_nA', 'get_ServiceLocator_1EwWNAService', true],
            'App\\Controller\\Admin\\AdminRestaurantController:editRestaurant' => ['privates', '.service_locator.1EwW_nA', 'get_ServiceLocator_1EwWNAService', true],
            'App\\Controller\\Admin\\AdminRestaurantController:listRestaurant' => ['privates', '.service_locator.XdnbiXt', 'get_ServiceLocator_XdnbiXtService', true],
            'App\\Controller\\Admin\\AdminUserController:addAdmin' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\Admin\\AdminUserController:addManager' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\Admin\\AdminUserController:delete' => ['privates', '.service_locator.j.xg0Ku', 'get_ServiceLocator_J_Xg0KuService', true],
            'App\\Controller\\Admin\\AdminUserController:editUserAdmin' => ['privates', '.service_locator.j.xg0Ku', 'get_ServiceLocator_J_Xg0KuService', true],
            'App\\Controller\\Admin\\AdminUserController:index' => ['privates', '.service_locator.lDw5jgg', 'get_ServiceLocator_LDw5jggService', true],
            'App\\Controller\\CategoryController:index' => ['privates', '.service_locator.3opkxl5', 'get_ServiceLocator_3opkxl5Service', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\DishController:index' => ['privates', '.service_locator.CVaM7f1', 'get_ServiceLocator_CVaM7f1Service', true],
            'App\\Controller\\FooterController:opening' => ['privates', '.service_locator.Y6_HEag', 'get_ServiceLocator_Y6HEagService', true],
            'App\\Controller\\MainController:index' => ['privates', '.service_locator.jSRi6YF', 'get_ServiceLocator_JSRi6YFService', true],
            'App\\Controller\\MenuController:index' => ['privates', '.service_locator.tlBnDBh', 'get_ServiceLocator_TlBnDBhService', true],
            'App\\Controller\\ProfileController:editUser' => ['privates', '.service_locator.YKrE6vB', 'get_ServiceLocator_YKrE6vBService', true],
            'App\\Controller\\ProfileController:editUserAllergy' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.xVV8u.q', 'get_ServiceLocator_XVV8u_QService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.1Z9fEX7', 'get_ServiceLocator_1Z9fEX7Service', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.EE0.cm9', 'get_ServiceLocator_EE0_Cm9Service', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.Z9ydiC1', 'get_ServiceLocator_Z9ydiC1Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Admin\\AdminAllergyController::addAllergy' => '?',
            'App\\Controller\\Admin\\AdminAllergyController::deleteAllergy' => '?',
            'App\\Controller\\Admin\\AdminAllergyController::editAllergy' => '?',
            'App\\Controller\\Admin\\AdminAllergyController::index' => '?',
            'App\\Controller\\Admin\\AdminCategoryController::addCategory' => '?',
            'App\\Controller\\Admin\\AdminCategoryController::deleteCategory' => '?',
            'App\\Controller\\Admin\\AdminCategoryController::editCategory' => '?',
            'App\\Controller\\Admin\\AdminCategoryController::index' => '?',
            'App\\Controller\\Admin\\AdminContactController::list' => '?',
            'App\\Controller\\Admin\\AdminDishController::activeHome' => '?',
            'App\\Controller\\Admin\\AdminDishController::addDish' => '?',
            'App\\Controller\\Admin\\AdminDishController::deleteDish' => '?',
            'App\\Controller\\Admin\\AdminDishController::deleteImage' => '?',
            'App\\Controller\\Admin\\AdminDishController::editDish' => '?',
            'App\\Controller\\Admin\\AdminDishController::index' => '?',
            'App\\Controller\\Admin\\AdminFormuleController::addFormule' => '?',
            'App\\Controller\\Admin\\AdminFormuleController::deleteFormule' => '?',
            'App\\Controller\\Admin\\AdminFormuleController::editFormule' => '?',
            'App\\Controller\\Admin\\AdminFormuleController::listFormule' => '?',
            'App\\Controller\\Admin\\AdminHoursController::addHours' => '?',
            'App\\Controller\\Admin\\AdminHoursController::deleteHours' => '?',
            'App\\Controller\\Admin\\AdminHoursController::duplicateHours' => '?',
            'App\\Controller\\Admin\\AdminHoursController::editHours' => '?',
            'App\\Controller\\Admin\\AdminHoursController::index' => '?',
            'App\\Controller\\Admin\\AdminMenuController::addMenu' => '?',
            'App\\Controller\\Admin\\AdminMenuController::deleteImage' => '?',
            'App\\Controller\\Admin\\AdminMenuController::deleteMenu' => '?',
            'App\\Controller\\Admin\\AdminMenuController::editMenu' => '?',
            'App\\Controller\\Admin\\AdminMenuController::listMenu' => '?',
            'App\\Controller\\Admin\\AdminRestaurantController::addRestaurant' => '?',
            'App\\Controller\\Admin\\AdminRestaurantController::deleteMenu' => '?',
            'App\\Controller\\Admin\\AdminRestaurantController::editRestaurant' => '?',
            'App\\Controller\\Admin\\AdminRestaurantController::listRestaurant' => '?',
            'App\\Controller\\Admin\\AdminUserController::addAdmin' => '?',
            'App\\Controller\\Admin\\AdminUserController::addManager' => '?',
            'App\\Controller\\Admin\\AdminUserController::delete' => '?',
            'App\\Controller\\Admin\\AdminUserController::editUserAdmin' => '?',
            'App\\Controller\\Admin\\AdminUserController::index' => '?',
            'App\\Controller\\CategoryController::index' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\DishController::index' => '?',
            'App\\Controller\\FooterController::opening' => '?',
            'App\\Controller\\MainController::index' => '?',
            'App\\Controller\\MenuController::index' => '?',
            'App\\Controller\\ProfileController::editUser' => '?',
            'App\\Controller\\ProfileController::editUserAllergy' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\AdminAllergyController:addAllergy' => '?',
            'App\\Controller\\Admin\\AdminAllergyController:deleteAllergy' => '?',
            'App\\Controller\\Admin\\AdminAllergyController:editAllergy' => '?',
            'App\\Controller\\Admin\\AdminAllergyController:index' => '?',
            'App\\Controller\\Admin\\AdminCategoryController:addCategory' => '?',
            'App\\Controller\\Admin\\AdminCategoryController:deleteCategory' => '?',
            'App\\Controller\\Admin\\AdminCategoryController:editCategory' => '?',
            'App\\Controller\\Admin\\AdminCategoryController:index' => '?',
            'App\\Controller\\Admin\\AdminContactController:list' => '?',
            'App\\Controller\\Admin\\AdminDishController:activeHome' => '?',
            'App\\Controller\\Admin\\AdminDishController:addDish' => '?',
            'App\\Controller\\Admin\\AdminDishController:deleteDish' => '?',
            'App\\Controller\\Admin\\AdminDishController:deleteImage' => '?',
            'App\\Controller\\Admin\\AdminDishController:editDish' => '?',
            'App\\Controller\\Admin\\AdminDishController:index' => '?',
            'App\\Controller\\Admin\\AdminFormuleController:addFormule' => '?',
            'App\\Controller\\Admin\\AdminFormuleController:deleteFormule' => '?',
            'App\\Controller\\Admin\\AdminFormuleController:editFormule' => '?',
            'App\\Controller\\Admin\\AdminFormuleController:listFormule' => '?',
            'App\\Controller\\Admin\\AdminHoursController:addHours' => '?',
            'App\\Controller\\Admin\\AdminHoursController:deleteHours' => '?',
            'App\\Controller\\Admin\\AdminHoursController:duplicateHours' => '?',
            'App\\Controller\\Admin\\AdminHoursController:editHours' => '?',
            'App\\Controller\\Admin\\AdminHoursController:index' => '?',
            'App\\Controller\\Admin\\AdminMenuController:addMenu' => '?',
            'App\\Controller\\Admin\\AdminMenuController:deleteImage' => '?',
            'App\\Controller\\Admin\\AdminMenuController:deleteMenu' => '?',
            'App\\Controller\\Admin\\AdminMenuController:editMenu' => '?',
            'App\\Controller\\Admin\\AdminMenuController:listMenu' => '?',
            'App\\Controller\\Admin\\AdminRestaurantController:addRestaurant' => '?',
            'App\\Controller\\Admin\\AdminRestaurantController:deleteMenu' => '?',
            'App\\Controller\\Admin\\AdminRestaurantController:editRestaurant' => '?',
            'App\\Controller\\Admin\\AdminRestaurantController:listRestaurant' => '?',
            'App\\Controller\\Admin\\AdminUserController:addAdmin' => '?',
            'App\\Controller\\Admin\\AdminUserController:addManager' => '?',
            'App\\Controller\\Admin\\AdminUserController:delete' => '?',
            'App\\Controller\\Admin\\AdminUserController:editUserAdmin' => '?',
            'App\\Controller\\Admin\\AdminUserController:index' => '?',
            'App\\Controller\\CategoryController:index' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\DishController:index' => '?',
            'App\\Controller\\FooterController:opening' => '?',
            'App\\Controller\\MainController:index' => '?',
            'App\\Controller\\MenuController:index' => '?',
            'App\\Controller\\ProfileController:editUser' => '?',
            'App\\Controller\\ProfileController:editUserAllergy' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]));
    }
}
