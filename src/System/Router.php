<?php


namespace Src\System;


class Router
{
    private $routes = [];

    public function __construct() {
        $this->routes = [
            'login' => [
                'controller' => 'SecurityController',
                'action' => 'login'
            ]
        ];
    }

    public function run() {

    }
}