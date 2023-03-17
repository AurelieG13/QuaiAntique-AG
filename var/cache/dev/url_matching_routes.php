<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/APropos' => [[['_route' => 'a_propos', '_controller' => 'App\\Controller\\AProposController::index'], null, null, null, false, false, null]],
        '/admin/allergy' => [[['_route' => 'admin_allergy_list', '_controller' => 'App\\Controller\\Admin\\AdminAllergyController::index'], null, null, null, true, false, null]],
        '/admin/allergy/add' => [[['_route' => 'admin_allergy_add', '_controller' => 'App\\Controller\\Admin\\AdminAllergyController::addAllergy'], null, null, null, false, false, null]],
        '/admin/booking' => [[['_route' => 'admin_booking_list', '_controller' => 'App\\Controller\\Admin\\AdminBookingController::index'], null, null, null, true, false, null]],
        '/admin/booking/add' => [[['_route' => 'admin_booking_add', '_controller' => 'App\\Controller\\Admin\\AdminBookingController::addBooking'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'admin_category_list', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::index'], null, null, null, true, false, null]],
        '/admin/category/add' => [[['_route' => 'admin_category_add', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::addCategory'], null, null, null, false, false, null]],
        '/admin/contact/list' => [[['_route' => 'admin_contact_list', '_controller' => 'App\\Controller\\Admin\\AdminContactController::list'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/dish/list' => [[['_route' => 'admin_dish_list', '_controller' => 'App\\Controller\\Admin\\AdminDishController::index'], null, null, null, false, false, null]],
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
        '/booking' => [[['_route' => 'booking_form', '_controller' => 'App\\Controller\\BookingController::form'], null, null, null, true, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|components/([^/]++)(?:/([^/]++))?(*:78)'
                    .'|wdt/([^/]++)(*:97)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:142)'
                            .'|router(*:156)'
                            .'|exception(?'
                                .'|(*:176)'
                                .'|\\.css(*:189)'
                            .')'
                        .')'
                        .'|(*:199)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|allergy/(?'
                        .'|edit/(\\d+)(*:240)'
                        .'|delete/(\\d+)(*:260)'
                    .')'
                    .'|booking/(?'
                        .'|edit/(\\d+)(*:290)'
                        .'|delete/(\\d+)(*:310)'
                    .')'
                    .'|category/(?'
                        .'|edit/(\\d+)(*:341)'
                        .'|delete/(\\d+)(*:361)'
                    .')'
                    .'|dish/(?'
                        .'|edit/(\\d+)(*:388)'
                        .'|activeHome/(\\d+)(*:412)'
                        .'|delete/(?'
                            .'|\\{(\\d+)\\}(*:439)'
                            .'|image/(\\d+)(*:458)'
                        .')'
                    .')'
                    .'|formule/(?'
                        .'|edit/(\\d+)(*:489)'
                        .'|delete/(\\d+)(*:509)'
                    .')'
                    .'|hours/(?'
                        .'|edit/(\\d+)(*:537)'
                        .'|d(?'
                            .'|uplicate/(\\d+)(*:563)'
                            .'|elete/(\\d+)(*:582)'
                        .')'
                    .')'
                    .'|menu/(?'
                        .'|edit/(\\d+)(*:610)'
                        .'|delete/(?'
                            .'|(\\d+)(*:633)'
                            .'|image/(\\d+)(*:652)'
                        .')'
                    .')'
                    .'|restaurant/(?'
                        .'|edit/(\\d+)(*:686)'
                        .'|delete/(\\d+)(*:706)'
                    .')'
                    .'|user/(?'
                        .'|edit/(\\d+)(*:733)'
                        .'|delete/(\\d+)(*:753)'
                    .')'
                .')'
                .'|/profile/edit(?'
                    .'|/(\\d+)(*:785)'
                    .'|allergy/(\\d+)(*:806)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:851)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [[['_route' => 'ux_live_component', '_live_action' => 'get'], ['_live_component', '_live_action'], null, null, false, true, null]],
        97 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        142 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        156 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        176 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        189 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        199 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        240 => [[['_route' => 'admin_allergy_edit', '_controller' => 'App\\Controller\\Admin\\AdminAllergyController::editAllergy'], ['id'], null, null, false, true, null]],
        260 => [[['_route' => 'admin_allergy_delete', '_controller' => 'App\\Controller\\Admin\\AdminAllergyController::deleteAllergy'], ['id'], null, null, false, true, null]],
        290 => [[['_route' => 'admin_booking_edit', '_controller' => 'App\\Controller\\Admin\\AdminBookingController::editBooking'], ['id'], null, null, false, true, null]],
        310 => [[['_route' => 'admin_booking_delete', '_controller' => 'App\\Controller\\Admin\\AdminBookingController::deleteBooking'], ['id'], null, null, false, true, null]],
        341 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::editCategory'], ['id'], null, null, false, true, null]],
        361 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::deleteCategory'], ['id'], null, null, false, true, null]],
        388 => [[['_route' => 'admin_dish_edit', '_controller' => 'App\\Controller\\Admin\\AdminDishController::editDish'], ['id'], null, null, false, true, null]],
        412 => [[['_route' => 'admin_dish_activeHome', '_controller' => 'App\\Controller\\Admin\\AdminDishController::activeHome'], ['id'], null, null, false, true, null]],
        439 => [[['_route' => 'admin_dish_delete', '_controller' => 'App\\Controller\\Admin\\AdminDishController::deleteDish'], ['id'], null, null, false, false, null]],
        458 => [[['_route' => 'admin_dish_delete_image', '_controller' => 'App\\Controller\\Admin\\AdminDishController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        489 => [[['_route' => 'admin_formule_edit', '_controller' => 'App\\Controller\\Admin\\AdminFormuleController::editFormule'], ['id'], null, null, false, true, null]],
        509 => [[['_route' => 'admin_formule_delete', '_controller' => 'App\\Controller\\Admin\\AdminFormuleController::deleteFormule'], ['id'], null, null, false, true, null]],
        537 => [[['_route' => 'admin_hours_edit', '_controller' => 'App\\Controller\\Admin\\AdminHoursController::editHours'], ['id'], null, null, false, true, null]],
        563 => [[['_route' => 'admin_hours_duplicate', '_controller' => 'App\\Controller\\Admin\\AdminHoursController::duplicateHours'], ['id'], null, null, false, true, null]],
        582 => [[['_route' => 'admin_hours_delete', '_controller' => 'App\\Controller\\Admin\\AdminHoursController::deleteHours'], ['id'], null, null, false, true, null]],
        610 => [[['_route' => 'admin_menu_edit', '_controller' => 'App\\Controller\\Admin\\AdminMenuController::editMenu'], ['id'], null, null, false, true, null]],
        633 => [[['_route' => 'admin_menu_delete', '_controller' => 'App\\Controller\\Admin\\AdminMenuController::deleteMenu'], ['id'], null, null, false, true, null]],
        652 => [[['_route' => 'admin_menu_delete_image', '_controller' => 'App\\Controller\\Admin\\AdminMenuController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        686 => [[['_route' => 'admin_restaurant_edit', '_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::editRestaurant'], ['id'], null, null, false, true, null]],
        706 => [[['_route' => 'admin_restaurant_delete', '_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::deleteMenu'], ['id'], null, null, false, true, null]],
        733 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\AdminUserController::editUserAdmin'], ['id'], null, null, false, true, null]],
        753 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\AdminUserController::delete'], ['id'], null, null, false, true, null]],
        785 => [[['_route' => 'profile_edit_user', '_controller' => 'App\\Controller\\ProfileController::editUser'], ['id'], null, null, false, true, null]],
        806 => [[['_route' => 'profile_edit_user_allergy', '_controller' => 'App\\Controller\\ProfileController::editUserAllergy'], ['id'], null, null, false, true, null]],
        851 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
