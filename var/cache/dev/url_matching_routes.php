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
        '/manager/allergy' => [[['_route' => 'manager_allergy_list', '_controller' => 'App\\Controller\\Admin\\AdminAllergyController::index'], null, null, null, true, false, null]],
        '/manager/allergy/add' => [[['_route' => 'manager_allergy_add', '_controller' => 'App\\Controller\\Admin\\AdminAllergyController::addAllergy'], null, null, null, false, false, null]],
        '/manager/booking' => [[['_route' => 'manager_booking_list', '_controller' => 'App\\Controller\\Admin\\AdminBookingController::index'], null, null, null, true, false, null]],
        '/manager/booking/add' => [[['_route' => 'manager_booking_add', '_controller' => 'App\\Controller\\Admin\\AdminBookingController::addBooking'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'admin_category_list', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::index'], null, null, null, true, false, null]],
        '/admin/category/add' => [[['_route' => 'admin_category_add', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::addCategory'], null, null, null, false, false, null]],
        '/manager/contact/list' => [[['_route' => 'manager_contact_list', '_controller' => 'App\\Controller\\Admin\\AdminContactController::list'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/manager/dish/list' => [[['_route' => 'manager_dish_list', '_controller' => 'App\\Controller\\Admin\\AdminDishController::index'], null, null, null, false, false, null]],
        '/manager/dish/add' => [[['_route' => 'manager_dish_add', '_controller' => 'App\\Controller\\Admin\\AdminDishController::addDish'], null, null, null, false, false, null]],
        '/manager/formule' => [[['_route' => 'manager_formule_list', '_controller' => 'App\\Controller\\Admin\\AdminFormuleController::listFormule'], null, null, null, true, false, null]],
        '/manager/formule/add' => [[['_route' => 'manager_formule_add', '_controller' => 'App\\Controller\\Admin\\AdminFormuleController::addFormule'], null, null, null, false, false, null]],
        '/manager/hours' => [[['_route' => 'manager_hours_list', '_controller' => 'App\\Controller\\Admin\\AdminHoursController::index'], null, null, null, true, false, null]],
        '/manager/hours/add' => [[['_route' => 'manager_hours_add', '_controller' => 'App\\Controller\\Admin\\AdminHoursController::addHours'], null, null, null, false, false, null]],
        '/manager/menu' => [[['_route' => 'manager_menu_list', '_controller' => 'App\\Controller\\Admin\\AdminMenuController::listMenu'], null, null, null, true, false, null]],
        '/manager/menu/add' => [[['_route' => 'manager_menu_add', '_controller' => 'App\\Controller\\Admin\\AdminMenuController::addMenu'], null, null, null, false, false, null]],
        '/manager/restaurant' => [[['_route' => 'manager_restaurant_list', '_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::listRestaurant'], null, null, null, true, false, null]],
        '/manager/restaurant/add' => [[['_route' => 'manager_restaurant_add', '_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::addRestaurant'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_list', '_controller' => 'App\\Controller\\Admin\\AdminUserController::index'], null, null, null, true, false, null]],
        '/admin/user/addAdmin' => [[['_route' => 'admin_user_addAdmin', '_controller' => 'App\\Controller\\Admin\\AdminUserController::addAdmin'], null, null, null, false, false, null]],
        '/admin/user/addManager' => [[['_route' => 'admin_user_addManager', '_controller' => 'App\\Controller\\Admin\\AdminUserController::addManager'], null, null, null, false, false, null]],
        '/manager' => [[['_route' => 'manager_home', '_controller' => 'App\\Controller\\Admin\\ManagerController::index'], null, null, null, true, false, null]],
        '/booking' => [[['_route' => 'booking_form', '_controller' => 'App\\Controller\\BookingController::form'], null, null, null, true, false, null]],
        '/category' => [[['_route' => 'category_list', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, true, false, null]],
        '/contact' => [[['_route' => 'contact_form', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, true, false, null]],
        '/dish' => [[['_route' => 'dish_list', '_controller' => 'App\\Controller\\DishController::index'], null, null, null, true, false, null]],
        '/footer' => [[['_route' => 'footerhome', '_controller' => 'App\\Controller\\FooterController::opening'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/mentions' => [[['_route' => 'mentions_home', '_controller' => 'App\\Controller\\MentionsController::index'], null, null, null, true, false, null]],
        '/mentions/mentions' => [[['_route' => 'mentions_mentionsLegales', '_controller' => 'App\\Controller\\MentionsController::mentions'], null, null, null, false, false, null]],
        '/mentions/confidentialite' => [[['_route' => 'mentions_confidentialite', '_controller' => 'App\\Controller\\MentionsController::confidentialite'], null, null, null, false, false, null]],
        '/mentions/cookie' => [[['_route' => 'mentions_cookie', '_controller' => 'App\\Controller\\MentionsController::cookie'], null, null, null, false, false, null]],
        '/menu' => [[['_route' => 'menu_list', '_controller' => 'App\\Controller\\MenuController::index'], null, null, null, true, false, null]],
        '/profile' => [[['_route' => 'profile_home', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, true, false, null]],
        '/profile/infos' => [[['_route' => 'profile_infos', '_controller' => 'App\\Controller\\ProfileController::infos'], null, null, null, false, false, null]],
        '/profile/booking' => [[['_route' => 'profile_booking', '_controller' => 'App\\Controller\\ProfileController::booking'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/manager/(?'
                    .'|allergy/(?'
                        .'|edit/(\\d+)(*:242)'
                        .'|delete/(\\d+)(*:262)'
                    .')'
                    .'|booking/(?'
                        .'|edit/(\\d+)(*:292)'
                        .'|delete/(\\d+)(*:312)'
                    .')'
                    .'|dish/(?'
                        .'|edit/(\\d+)(*:339)'
                        .'|activeHome/(\\d+)(*:363)'
                        .'|delete/(?'
                            .'|\\{(\\d+)\\}(*:390)'
                            .'|image/(\\d+)(*:409)'
                        .')'
                    .')'
                    .'|formule/(?'
                        .'|edit/(\\d+)(*:440)'
                        .'|delete/(\\d+)(*:460)'
                    .')'
                    .'|hours/(?'
                        .'|edit/(\\d+)(*:488)'
                        .'|d(?'
                            .'|uplicate/(\\d+)(*:514)'
                            .'|elete/(\\d+)(*:533)'
                        .')'
                    .')'
                    .'|menu/(?'
                        .'|edit/(\\d+)(*:561)'
                        .'|delete/(?'
                            .'|(\\d+)(*:584)'
                            .'|image/(\\d+)(*:603)'
                        .')'
                    .')'
                    .'|restaurant/(?'
                        .'|edit/(\\d+)(*:637)'
                        .'|delete/(\\d+)(*:657)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|category/(?'
                        .'|edit/(\\d+)(*:699)'
                        .'|delete/(\\d+)(*:719)'
                    .')'
                    .'|user/(?'
                        .'|edit/(\\d+)(*:746)'
                        .'|delete/(\\d+)(*:766)'
                    .')'
                .')'
                .'|/profile/edit(?'
                    .'|/(\\d+)(*:798)'
                    .'|allergy/(\\d+)(*:819)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:864)'
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
        242 => [[['_route' => 'manager_allergy_edit', '_controller' => 'App\\Controller\\Admin\\AdminAllergyController::editAllergy'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'manager_allergy_delete', '_controller' => 'App\\Controller\\Admin\\AdminAllergyController::deleteAllergy'], ['id'], null, null, false, true, null]],
        292 => [[['_route' => 'manager_booking_edit', '_controller' => 'App\\Controller\\Admin\\AdminBookingController::editBooking'], ['id'], null, null, false, true, null]],
        312 => [[['_route' => 'manager_booking_delete', '_controller' => 'App\\Controller\\Admin\\AdminBookingController::deleteBooking'], ['id'], null, null, false, true, null]],
        339 => [[['_route' => 'manager_dish_edit', '_controller' => 'App\\Controller\\Admin\\AdminDishController::editDish'], ['id'], null, null, false, true, null]],
        363 => [[['_route' => 'manager_dish_activeHome', '_controller' => 'App\\Controller\\Admin\\AdminDishController::activeHome'], ['id'], null, null, false, true, null]],
        390 => [[['_route' => 'manager_dish_delete', '_controller' => 'App\\Controller\\Admin\\AdminDishController::deleteDish'], ['id'], null, null, false, false, null]],
        409 => [[['_route' => 'manager_dish_delete_image', '_controller' => 'App\\Controller\\Admin\\AdminDishController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        440 => [[['_route' => 'manager_formule_edit', '_controller' => 'App\\Controller\\Admin\\AdminFormuleController::editFormule'], ['id'], null, null, false, true, null]],
        460 => [[['_route' => 'manager_formule_delete', '_controller' => 'App\\Controller\\Admin\\AdminFormuleController::deleteFormule'], ['id'], null, null, false, true, null]],
        488 => [[['_route' => 'manager_hours_edit', '_controller' => 'App\\Controller\\Admin\\AdminHoursController::editHours'], ['id'], null, null, false, true, null]],
        514 => [[['_route' => 'manager_hours_duplicate', '_controller' => 'App\\Controller\\Admin\\AdminHoursController::duplicateHours'], ['id'], null, null, false, true, null]],
        533 => [[['_route' => 'manager_hours_delete', '_controller' => 'App\\Controller\\Admin\\AdminHoursController::deleteHours'], ['id'], null, null, false, true, null]],
        561 => [[['_route' => 'manager_menu_edit', '_controller' => 'App\\Controller\\Admin\\AdminMenuController::editMenu'], ['id'], null, null, false, true, null]],
        584 => [[['_route' => 'manager_menu_delete', '_controller' => 'App\\Controller\\Admin\\AdminMenuController::deleteMenu'], ['id'], null, null, false, true, null]],
        603 => [[['_route' => 'manager_menu_delete_image', '_controller' => 'App\\Controller\\Admin\\AdminMenuController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        637 => [[['_route' => 'manager_restaurant_edit', '_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::editRestaurant'], ['id'], null, null, false, true, null]],
        657 => [[['_route' => 'manager_restaurant_delete', '_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::deleteMenu'], ['id'], null, null, false, true, null]],
        699 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::editCategory'], ['id'], null, null, false, true, null]],
        719 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::deleteCategory'], ['id'], null, null, false, true, null]],
        746 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\AdminUserController::editUserAdmin'], ['id'], null, null, false, true, null]],
        766 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\AdminUserController::delete'], ['id'], null, null, false, true, null]],
        798 => [[['_route' => 'profile_edit_user', '_controller' => 'App\\Controller\\ProfileController::editUser'], ['id'], null, null, false, true, null]],
        819 => [[['_route' => 'profile_edit_user_allergy', '_controller' => 'App\\Controller\\ProfileController::editUserAllergy'], ['id'], null, null, false, true, null]],
        864 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
