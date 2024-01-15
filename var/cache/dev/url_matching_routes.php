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
        '/admin/formation' => [[['_route' => 'app_formation_index', '_controller' => 'App\\Controller\\FormationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/formation/new' => [[['_route' => 'app_formation_new', '_controller' => 'App\\Controller\\FormationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/admin/role' => [[['_route' => 'app_role_index', '_controller' => 'App\\Controller\\RoleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/role/new' => [[['_route' => 'app_role_new', '_controller' => 'App\\Controller\\RoleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:81)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:111)'
                            .'|contexts/([^.]+)(?:\\.(jsonld))?(*:150)'
                            .'|errors/([^/]++)(?'
                                .'|(*:176)'
                            .')'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:214)'
                            .')'
                            .'|formations(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:262)'
                                .'|(?:\\.([^/]++))?(*:285)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:322)'
                                .')'
                            .')'
                            .'|roles(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:366)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:392)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:430)'
                                .')'
                            .')'
                            .'|user(?'
                                .'|s(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:477)'
                                    .'|(?:\\.([^/]++))?(*:500)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:537)'
                                    .')'
                                .')'
                                .'|_appy/formamtion/([^/]++)(*:572)'
                            .')'
                        .')'
                    .')'
                    .'|dmin/(?'
                        .'|formation/([^/]++)(?'
                            .'|(*:612)'
                            .'|/edit(*:625)'
                            .'|(*:633)'
                        .')'
                        .'|role/([^/]++)(?'
                            .'|(*:658)'
                            .'|/edit(*:671)'
                            .'|(*:679)'
                        .')'
                        .'|user/(?'
                            .'|([^/]++)(?'
                                .'|(*:707)'
                                .'|/edit(*:720)'
                                .'|(*:728)'
                            .')'
                            .'|user_appy/formation/([^/]++)(*:765)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:807)'
                    .'|wdt/([^/]++)(*:827)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:869)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:906)'
                                .'|router(*:920)'
                                .'|exception(?'
                                    .'|(*:940)'
                                    .'|\\.css(*:953)'
                                .')'
                            .')'
                            .'|(*:963)'
                        .')'
                    .')'
                .')'
                .'|/show/([^/]++)(*:988)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        81 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        111 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        150 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        176 => [
            [['_route' => '_api_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi'], ['status'], ['GET' => 0], null, false, true, null],
        ],
        214 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        262 => [[['_route' => '_api_/formations/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Formation', '_api_operation_name' => '_api_/formations/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        285 => [[['_route' => '_api_/formations{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Formation', '_api_operation_name' => '_api_/formations{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        322 => [
            [['_route' => '_api_/formations/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Formation', '_api_operation_name' => '_api_/formations/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/formations/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Formation', '_api_operation_name' => '_api_/formations/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        366 => [[['_route' => '_api_/roles/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Role', '_api_operation_name' => '_api_/roles/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        392 => [
            [['_route' => '_api_/roles{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Role', '_api_operation_name' => '_api_/roles{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/roles{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Role', '_api_operation_name' => '_api_/roles{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        430 => [
            [['_route' => '_api_/roles/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Role', '_api_operation_name' => '_api_/roles/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/roles/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Role', '_api_operation_name' => '_api_/roles/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/roles/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Role', '_api_operation_name' => '_api_/roles/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        477 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        500 => [[['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        537 => [
            [['_route' => '_api_/users/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        572 => [[['_route' => 'user_apply', '_controller' => 'App\\Controller\\UserController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'user_apply'], ['id'], ['PATCH' => 0], null, false, true, null]],
        612 => [[['_route' => 'app_formation_show', '_controller' => 'App\\Controller\\FormationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        625 => [[['_route' => 'app_formation_edit', '_controller' => 'App\\Controller\\FormationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        633 => [[['_route' => 'app_formation_delete', '_controller' => 'App\\Controller\\FormationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        658 => [[['_route' => 'app_role_show', '_controller' => 'App\\Controller\\RoleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        671 => [[['_route' => 'app_role_edit', '_controller' => 'App\\Controller\\RoleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        679 => [[['_route' => 'app_role_delete', '_controller' => 'App\\Controller\\RoleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        707 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        720 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        728 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        765 => [[['_route' => 'app_user_apply', '_controller' => 'App\\Controller\\UserController::userApply'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        807 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        827 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        869 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        906 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        920 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        940 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        953 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        963 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        988 => [
            [['_route' => 'app_user_show_formation', '_controller' => 'App\\Controller\\HomeController::show_formation'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
