<?php

namespace app\controller;

use app\core\Controller;

class AccountController extends Controller
{
    public function loginAction()
    {
        if (!empty($_POST['login']) && !empty($_POST['pass'])) {
            $res = $this->model->log($_POST['login'], $_POST['pass']);
            unset($_POST);

            if ($res) {
                $this->sess($res);
                header("Location:/");
            }
        }
        $this->view->render('Login');
    }

    public function sess($res)
    {
        $_SESSION['id'] = $res['id'];
        $_SESSION['name'] = $res['name'];
    }

    public function registerAction()
    {
        if ($this->model->reg()) {
            header("Location:/account/login");
        }
        $this->view->render('Reg');
    }

    public function logoutAction()
    {
        unset($_SESSION["id"]);
        unset($_SESSION["name"]);
        header("Location:/");
    }
}
