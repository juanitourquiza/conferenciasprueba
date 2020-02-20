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
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\AppController::index'], null, null, null, false, false, null]],
        '/subir' => [[['_route' => 'subir', '_controller' => 'App\\Controller\\AppController::subir'], null, null, null, false, false, null]],
        '/conferencias' => [[['_route' => 'conferencias_index', '_controller' => 'App\\Controller\\ConferenciasController::index'], null, ['GET' => 0], null, true, false, null]],
        '/conferencias/new' => [[['_route' => 'conferencias_new', '_controller' => 'App\\Controller\\ConferenciasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tematicas' => [[['_route' => 'tematicas_index', '_controller' => 'App\\Controller\\TematicasController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tematicas/new' => [[['_route' => 'tematicas_new', '_controller' => 'App\\Controller\\TematicasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/distribucion/([^/]++)(*:191)'
                .'|/conferencias/([^/]++)(?'
                    .'|(*:224)'
                    .'|/edit(*:237)'
                    .'|(*:245)'
                .')'
                .'|/tematicas/([^/]++)(?'
                    .'|(*:276)'
                    .'|/edit(*:289)'
                    .'|(*:297)'
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
        191 => [[['_route' => 'distribucion', '_controller' => 'App\\Controller\\AppController::distribucionAction'], ['id'], null, null, false, true, null]],
        224 => [[['_route' => 'conferencias_show', '_controller' => 'App\\Controller\\ConferenciasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        237 => [[['_route' => 'conferencias_edit', '_controller' => 'App\\Controller\\ConferenciasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        245 => [[['_route' => 'conferencias_delete', '_controller' => 'App\\Controller\\ConferenciasController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        276 => [[['_route' => 'tematicas_show', '_controller' => 'App\\Controller\\TematicasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        289 => [[['_route' => 'tematicas_edit', '_controller' => 'App\\Controller\\TematicasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        297 => [
            [['_route' => 'tematicas_delete', '_controller' => 'App\\Controller\\TematicasController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
