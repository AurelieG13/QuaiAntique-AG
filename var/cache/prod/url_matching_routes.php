<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/APropos' => [[['_route' => 'a_propos', '_controller' => 'App\\Controller\\AProposController::index'], null, null, null, false, false, null]],
        '/admin/allergy' => [[['_route' => 'admin_allergy_list', '_controller' => 'App\\Controller\\Admin\\AdminAllergyController::index'], null, null, null, true, false, null]],
        '/admin/allergy/add' => [[['_route' => 'admin_allergy_add', '_controller' => 'App\\Controller\\Admin\\AdminAllergyController::addAllergy'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'admin_category_list', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::index'], null, null, null, true, false, null]],
        '/admin/category/add' => [[['_route' => 'admin_category_add', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::addCategory'], null, null, null, false, false, null]],
        '/admin/contact/list' => [[['_route' => 'admin_contact_list', '_controller' => 'App\\Controller\\Admin\\AdminContactController::list'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/dish' => [[['_route' => 'admin_dish_list', '_controller' => 'App\\Controller\\Admin\\AdminDishController::index'], null, null, null, true, false, null]],
        '/admin/dish/add' => [[['_route' => 'admin_dish_add', '_controller' => 'App\\Controller\\Admin\\AdminDishController::addDish'], null, null, null, false, false, null]],
        '/admin/formule' => [[['_route' => 'admin_formule_list', '_controller' => 'App\\Controller\\Admin\\AdminFormuleController::listFormule'], null, null, null, true, false, null]],
        '/admin/formule/add' => [[['_route' => 'admin_formule_add', '_controller' => 'App\\Controller\\Admin\\AdminFormuleController::addFormule'], null, null, null, false, false, null]],
        '/admin/hours' => [[['_route' => 'admin_hours_list', '_controller' => 'App\\Controller\\Admin\\AdminHoursController::index'], null, null, null, true, false, null]],
        '/admin/hours/add' => [[['_route' => 'admin_hours_add', '_controller' => 'App\\Controller\\Admin\\AdminHoursController::addHours'], null, null, null, false, false, null]],
        '/admin/menu' => [[['_route' => 'admin_menu_list', '_controller' => 'App\\Controller\\Admin\\AdminMenuController::listMenu'], null, null, null, true, false, null]],
        '/admin/menu/add' => [[['_route' => 'admin_menu_add', '_controller' => 'App\\Controller\\Admin\\AdminMenuController::addMenu'], null, null, null, false, false, null]],
        '/admin/restaurant' => [[['_route' => 'admin_restaurant_list', '_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::listRestaurant'], null, null, null, true, false, null]],
        '/admin/restaurant/add' => [[['_route' => 'admin_restaurant_add', '_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::addRestaurant'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_list', '_controller' => 'App\\Controller\\Admin\\AdminUserController::index'], null, null, null, true, false, null]],
        '/admin/user/addAdmin' => [[['_route' => 'admin_user_addAdmin', '_controller' => 'App\\Controller\\Admin\\AdminUserController::addAdmin'], null, null, null, false, false, null]],
        '/admin/user/addManager' => [[['_route' => 'admin_user_addManager', '_controller' => 'App\\Controller\\Admin\\AdminUserController::addManager'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'category_list', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, true, false, null]],
        '/contact' => [[['_route' => 'contact_form', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, true, false, null]],
        '/dish' => [[['_route' => 'dish_list', '_controller' => 'App\\Controller\\DishController::index'], null, null, null, true, false, null]],
        '/footer' => [[['_route' => 'footerhome', '_controller' => 'App\\Controller\\FooterController::opening'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/menu' => [[['_route' => 'menu_list', '_controller' => 'App\\Controller\\MenuController::index'], null, null, null, true, false, null]],
        '/profile' => [[['_route' => 'profile_home', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, true, false, null]],
        '/profile/infos' => [[['_route' => 'profile_infos', '_controller' => 'App\\Controller\\ProfileController::infos'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_components/([^/]++)(?:/([^/]++))?(*:42)'
                .'|/admin/(?'
                    .'|allergy/(?'
                        .'|edit/(\\d+)(*:80)'
                        .'|delete/(\\d+)(*:99)'
                    .')'
                    .'|category/(?'
                        .'|edit/(\\d+)(*:129)'
                        .'|delete/(\\d+)(*:149)'
                    .')'
                    .'|dish/(?'
                        .'|edit/(\\d+)(*:176)'
                        .'|activeHome/(\\d+)(*:200)'
                        .'|delete/(?'
                            .'|\\{(\\d+)\\}(*:227)'
                            .'|image/(\\d+)(*:246)'
                        .')'
                    .')'
                    .'|formule/(?'
                        .'|edit/(\\d+)(*:277)'
                        .'|delete/(\\d+)(*:297)'
                    .')'
                    .'|hours/(?'
                        .'|edit/(\\d+)(*:325)'
                        .'|d(?'
                            .'|uplicate/(\\d+)(*:351)'
                            .'|elete/(\\d+)(*:370)'
                        .')'
                    .')'
                    .'|menu/(?'
                        .'|edit/(\\d+)(*:398)'
                        .'|delete/(?'
                            .'|(\\d+)(*:421)'
                            .'|image/(\\d+)(*:440)'
                        .')'
                    .')'
                    .'|restaurant/(?'
                        .'|edit/(\\d+)(*:474)'
                        .'|delete/(\\d+)(*:494)'
                    .')'
                    .'|user/(?'
                        .'|edit/(\\d+)(*:521)'
                        .'|delete/(\\d+)(*:541)'
                    .')'
                .')'
                .'|/profile/edit(?'
                    .'|/(\\d+)(*:573)'
                    .'|allergy/(\\d+)(*:594)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:639)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'ux_live_component', '_live_action' => 'get'], ['_live_component', '_live_action'], null, null, false, true, null]],
        80 => [[['_route' => 'admin_allergy_edit', '_controller' => 'App\\Controller\\Admin\\AdminAllergyController::editAllergy'], ['id'], null, null, false, true, null]],
        99 => [[['_route' => 'admin_allergy_delete', '_controller' => 'App\\Controller\\Admin\\AdminAllergyController::deleteAllergy'], ['id'], null, null, false, true, null]],
        129 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::editCategory'], ['id'], null, null, false, true, null]],
        149 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::deleteCategory'], ['id'], null, null, false, true, null]],
        176 => [[['_route' => 'admin_dish_edit', '_controller' => 'App\\Controller\\Admin\\AdminDishController::editDish'], ['id'], null, null, false, true, null]],
        200 => [[['_route' => 'admin_dish_activeHome', '_controller' => 'App\\Controller\\Admin\\AdminDishController::activeHome'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'admin_dish_delete', '_controller' => 'App\\Controller\\Admin\\AdminDishController::deleteDish'], ['id'], null, null, false, false, null]],
        246 => [[['_route' => 'admin_dish_delete_image', '_controller' => 'App\\Controller\\Admin\\AdminDishController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        277 => [[['_route' => 'admin_formule_edit', '_controller' => 'App\\Controller\\Admin\\AdminFormuleController::editFormule'], ['id'], null, null, false, true, null]],
        297 => [[['_route' => 'admin_formule_delete', '_controller' => 'App\\Controller\\Admin\\AdminFormuleController::deleteFormule'], ['id'], null, null, false, true, null]],
        325 => [[['_route' => 'admin_hours_edit', '_controller' => 'App\\Controller\\Admin\\AdminHoursController::editHours'], ['id'], null, null, false, true, null]],
        351 => [[['_route' => 'admin_hours_duplicate', '_controller' => 'App\\Controller\\Admin\\AdminHoursController::duplicateHours'], ['id'], null, null, false, true, null]],
        370 => [[['_route' => 'admin_hours_delete', '_controller' => 'App\\Controller\\Admin\\AdminHoursController::deleteHours'], ['id'], null, null, false, true, null]],
        398 => [[['_route' => 'admin_menu_edit', '_controller' => 'App\\Controller\\Admin\\AdminMenuController::editMenu'], ['id'], null, null, false, true, null]],
        421 => [[['_route' => 'admin_menu_delete', '_controller' => 'App\\Controller\\Admin\\AdminMenuController::deleteMenu'], ['id'], null, null, false, true, null]],
        440 => [[['_route' => 'admin_menu_delete_image', '_controller' => 'App\\Controller\\Admin\\AdminMenuController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        474 => [[['_route' => 'admin_restaurant_edit', '_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::editRestaurant'], ['id'], null, null, false, true, null]],
        494 => [[['_route' => 'admin_restaurant_delete', '_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::deleteMenu'], ['id'], null, null, false, true, null]],
        521 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\AdminUserController::editUserAdmin'], ['id'], null, null, false, true, null]],
        541 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\AdminUserController::delete'], ['id'], null, null, false, true, null]],
        573 => [[['_route' => 'profile_edit_user', '_controller' => 'App\\Controller\\ProfileController::editUser'], ['id'], null, null, false, true, null]],
        594 => [[['_route' => 'profile_edit_user_allergy', '_controller' => 'App\\Controller\\ProfileController::editUserAllergy'], ['id'], null, null, false, true, null]],
        639 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
