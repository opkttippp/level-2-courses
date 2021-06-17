<?php
namespace app\controller;

use app\core\Controller;

class AccountController extends Controller
{
    public function loginAction()
    {
        $res =[];
        if (!empty($_POST['login']) && !empty($_POST['pass'])) {
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            unset($_POST);
            $res = $this->model->log($login, $pass);
            if (!empty($res)) {
                $_SESSION['id'] = $res['id'];
                $_SESSION['name'] = $res['name'];
                header("Location:/");
            } else {
                $res['error'] = ' Error User!!';
            }
        }
        $this->view->render('Login', $res);
    }
    public function registerAction()
    {
        if (!empty($_POST['name']) && !empty($_POST['surname'])&& !empty($_POST['login']) &&
            !empty($_POST['pass']) && !empty($_POST['email'])) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            unset($_POST);
            if ($this->model->reg($name, $surname, $login, $pass, $email)) {
                header("Location:/account/login");
            }
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
