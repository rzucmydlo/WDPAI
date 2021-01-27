<?php

require_once 'src//Controllers//BoardController.php';
require_once 'src//Controllers//SecurityController.php';
require_once 'src//Controllers//AdminController.php';

class Router {
    private $routes = [];

    public function __construct()
    {
        $this->routes = [
            'board' => [
                'controller' => 'BoardController',
                'action' => 'getLatestPhotos'
            ],
            'login' => [
                'controller' => 'SecurityController',
                'action' => 'login'
            ],
            'logout' => [
                'controller' => 'SecurityController',
                'action' => 'logout'
            ],
            'admin' => [
                'controller' => 'AdminController',
                'action' => 'index'
            ],
            'users' => [
                'controller' => 'AdminController',
                'action' => 'users'
            ],
            

        ];
    }

    public function run()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 'login';

        if (isset($this->routes[$page])) {
            $controller = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];
            $object = new $controller;
            $object->$action();
        }
    }
}