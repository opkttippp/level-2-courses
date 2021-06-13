<?php

namespace app\controller;

use app\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $vars = [
            'name' => 'Vasa',
            'age' => '30'
        ];
        $this->view->render('hello!!',$vars);
    }
}
