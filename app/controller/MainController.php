<?php

namespace app\controller;

use app\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $data = $this->model->getData();
        $this->view->render('hello!!', $data);
    }
}
