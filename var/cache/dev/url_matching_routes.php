<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/prd' => [[['_route' => 'app_prd_index', '_controller' => 'App\\Controller\\PrdController::index'], null, ['GET' => 0], null, true, false, null]],
        '/prd/new' => [[['_route' => 'app_prd_new', '_controller' => 'App\\Controller\\PrdController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/ticket/show' => [[['_route' => 'app_ticket_index', '_controller' => 'App\\Controller\\TicketController::index'], null, ['GET' => 0], null, false, false, null]],
        '/ticket/new' => [[['_route' => 'app_ticket_new', '_controller' => 'App\\Controller\\TicketController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/prd/([^/]++)(?'
                    .'|(*:58)'
                    .'|/edit(*:70)'
                    .'|(*:77)'
                .')'
                .'|/ticket/(?'
                    .'|pay/([^/]++)(*:108)'
                    .'|([^/]++)(?'
                        .'|(*:127)'
                        .'|/edit(*:140)'
                        .'|(*:148)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        58 => [[['_route' => 'app_prd_show', '_controller' => 'App\\Controller\\PrdController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        70 => [[['_route' => 'app_prd_edit', '_controller' => 'App\\Controller\\PrdController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        77 => [[['_route' => 'app_prd_delete', '_controller' => 'App\\Controller\\PrdController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        108 => [[['_route' => 'choose_ticket', '_controller' => 'App\\Controller\\TicketController::chooseTicket'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        127 => [[['_route' => 'app_ticket_show', '_controller' => 'App\\Controller\\TicketController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        140 => [[['_route' => 'app_ticket_edit', '_controller' => 'App\\Controller\\TicketController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        148 => [
            [['_route' => 'app_ticket_delete', '_controller' => 'App\\Controller\\TicketController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
