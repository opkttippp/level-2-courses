<?php

namespace app\core;

abstract class Controller
{
    public $param;
    public $view;

    public function __construct($param)
    {
        $this->param = $param;
        $this->model = $this->loadModel($param['controller']);
        $this->view = new View($param);
    }

    public function loadModel($name)
    {
        $path = 'app\model\\' . ucfirst($name);
        if (class_exists($path)) {
            return new $path;
        }
        return false;
    }
}
