<?php

namespace app\core;

class View
{
    public $path;
    public $param;
    public $layout = 'default';

    public function __construct($param)
    {
        $this->param = $param;
        $this->path = $this->param['controller'].'/'.$this->param['action'];
    }
    public function render($title, $data = [])
    {
//        extract($data);
        if (file_exists('app/views/'.$this->path.'.php')) {
            ob_start();
            require 'app/views/' . $this->path . '.php';
            $content = ob_get_clean();
            require 'app/views/layouts/' . $this->layout . '.php';
        } else {
            echo ' Вид'.$this->param['action'].' не найден';
        }
    }
    public static function errorCode($code)
    {
        http_response_code($code);
        require 'app/views/errors/'.$code.'.php';
        exit();
    }
}
