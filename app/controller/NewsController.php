<?php

namespace app\controller;

use app\core\Controller;

class NewsController extends Controller
{
    public function showAction()
    {
        $data = $this->model->getNews();
        $this->view->render('show', $data);
    }
}
