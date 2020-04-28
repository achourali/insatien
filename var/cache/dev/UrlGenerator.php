<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    'default' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/default']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\DefaultController::home'], [], [['text', '/']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\DefaultController::contactUs'], [], [['text', '/contact']], [], []],
    'comfirmation' => [['username'], ['_controller' => 'App\\Controller\\DefaultController::comfirmation'], [], [['text', '?'], ['variable', '/', '[^/]+', 'username'], ['text', '/comfirmation']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\DefaultController::register'], [], [['text', '/register']], [], []],
];
