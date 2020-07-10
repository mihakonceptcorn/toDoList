<?php

return [
    '' => [
        'controller' => 'Main',
        'action' => 'index',
        'access' => 'all',
    ],
    'login' => [
        'controller' => 'Account',
        'action' => 'login',
        'access' => 'all',
    ],
    'logout' => [
        'controller' => 'Account',
        'action' => 'logout',
        'access' => 'admin',
    ],
    'upload' => [
        'controller' => 'Admin',
        'action' => 'upload',
        'access' => 'admin',
    ],
    'item/{id:\d+}' => [
        'controller' => 'Item',
        'action' => 'show',
        'access' => 'all',
    ],
    'done/{id:\d+}' => [
        'controller' => 'Item',
        'action' => 'done',
        'access' => 'all',
    ],
];