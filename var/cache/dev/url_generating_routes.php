<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_attachement_index' => [[], ['_controller' => 'App\\Controller\\AttachementController::index'], [], [['text', '/attachement/']], [], [], []],
    'app_attachement_new' => [[], ['_controller' => 'App\\Controller\\AttachementController::new'], [], [['text', '/attachement/new']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
