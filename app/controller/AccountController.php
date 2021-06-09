<?php

namespace app\controller;

use app\core\Controller;

class AccountController extends Controller
{
    public function loginAction()
    {
        $this->view->render('Login');
    }
    public function registerAction()
    {
        $this->view->render('Reg');
    }
}
