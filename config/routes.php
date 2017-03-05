<?php
use Cake\Routing\Router;

Router::plugin('Resize', ['path' => '/'], function ($routes) {
    $routes->connect(
        '/image/:size/**',
        [
            'controller' => 'Resize',
            'action' => 'resize'
        ],
        [
            'pass' => ['size', 'filename']
        ]);
    $routes->fallbacks('InflectedRoute');
});
