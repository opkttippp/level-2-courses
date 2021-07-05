<?php

namespace app\core;

class Router
{
    protected array $routes = [];
    protected array $param = [];

    public function __construct()
    {
        $arr = require 'app/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }

    public function add($route, $param)
    {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $param;
    }

    public function match(): bool
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $param) {
            if (preg_match($route, $url)) {
                $this->param = $param;
                return true;
            }
        }
        return false;
    }

    public function run()
    {
        if ($this->match()) {
            $path = 'app\controller\\' . ucfirst($this->param['controller']) . 'Controller';
            if (class_exists($path)) {
                $action = $this->param['action'] . 'Action';
                if (method_exists($path, $action)) {
                    $controller = new $path($this->param);
                    $controller->$action();
                } else {
                    View::errorCode(404);
                }
            } else {
                View::errorCode(404);
            }
        } else {
            View::errorCode(404);
        }
    }
}
