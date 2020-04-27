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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/question' => [[['_route' => 'app_property_index', '_controller' => 'App\\Controller\\PropertyController::index'], null, null, null, false, false, null]],
        '/list' => [[['_route' => 'app_question_listall', '_controller' => 'App\\Controller\\QuestionController::listAll'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/list/([^/]++)(*:183)'
                .'|/([^/]++)(?'
                    .'|(*:203)'
                    .'|/([^/]++)(*:220)'
                .')'
                .'|/register(*:238)'
                .'|/log(?'
                    .'|in(?'
                        .'|(*:258)'
                    .')'
                    .'|out(*:270)'
                .')'
                .'|/profil(?'
                    .'|(*:289)'
                    .'|/([^/]++)(*:306)'
                    .'|(*:314)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        183 => [[['_route' => 'id', '_controller' => 'App\\Controller\\QuestionController::index'], ['id'], null, null, false, true, null]],
        203 => [[['_route' => 'app_question_selectxquestion', '_controller' => 'App\\Controller\\QuestionController::selectXQuestion'], ['categorie'], null, null, false, true, null]],
        220 => [[['_route' => 'app_question_getxquestion', '_controller' => 'App\\Controller\\QuestionController::getXQuestion'], ['categorie', 'nombre'], null, null, false, true, null]],
        238 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], [], null, null, false, false, null]],
        258 => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], [], null, null, false, false, null],
            [['_route' => 'login'], [], null, null, false, false, null],
        ],
        270 => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null]],
        289 => [[['_route' => 'app_user_profil', '_controller' => 'App\\Controller\\UserController::profil'], [], null, null, false, false, null]],
        306 => [[['_route' => 'app_user_profilid', '_controller' => 'App\\Controller\\UserController::profilID'], ['id'], null, null, false, true, null]],
        314 => [
            [['_route' => 'profil', '_controller' => 'App\\Controller\\UserController::profil'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
