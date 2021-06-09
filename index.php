<?php

use app\core\Router;

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class);
    $path .= '.php';
    if (file_exists($path)) {
        include $path;
    }
});
$s = new Router();
$s ->run();
