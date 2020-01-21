<?php


namespace Src\System;

use Src\Controllers\SecurityController;

class Router
{
    private $routes = [];

    public function __construct() {
        // Routing table
        $this->routes = [
            'login' => [
                'controller' => 'Src\Controllers\SecurityController',
                'action' => 'login'
            ],
            'logout' => [
                'controller' => 'Src\Controllers\SecurityController',
                'action' => 'logout'
            ],
            'home' => [
                'controller' => 'Src\Controllers\HomeController',
                'action' => 'show'
            ],
            'register' => [
                'controller' => 'Src\Controllers\RegisterController',
                'action' => 'register'
            ],
            'products' => [
                'controller' => 'Src\Controllers\ProductListController',
                'action' => 'load'
            ],
            'product' => [
                'controller' => 'Src\Controllers\ProductController',
                'action' => 'showProduct'
            ]
        ];
    }

    public function run()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = explode( '/', $uri );

        $page = $uri[1] !== '' ? $uri[1] : 'home';

        if (isset($this->routes[$page])) {
            $controller = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            $object = new $controller;
            $object->$action();
        }
    }
}