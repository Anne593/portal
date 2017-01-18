<?php
$config = [
    'menu' => [
        'dashboard' => [
            'title' => __('dashboard.index.title'),
            'icon' => 'dashboard',
            'url' => [
                'plugin' => null,
                'controller' => 'Dashboard',
                'action' => 'index'
            ]
        ],
        'people' => [
            'title' => __('people.index.title'),
            'icon' => 'users',
            'url' => [
                'plugin' => null,
                'controller' => 'People',
                'action' => 'index'
            ]
        ]
    ]
];
