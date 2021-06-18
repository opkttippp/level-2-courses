<?php

namespace app\controller;

use app\core\Controller;

class ProfileController extends Controller
{
    public function editAction()
    {
        if (!empty($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $data = $this->model->getUser($id);
            $_SESSION['name'] = $data['name'];
            $_SESSION['surname'] = $data['surname'];
            $_SESSION['login'] = $data['login'];
            $_SESSION['login'] = $data['login'];
            $_SESSION['pass'] = $data['pass'];
            $_SESSION['email'] = $data['email'];
            $this->view->render('edit', $data);
        } else {
            header("Location:/");
        }
    }
    public function newAction()
    {
        $id = $_SESSION['id'];
        $name =  $_POST['name'] ? $_POST['name'] : $_SESSION['name'];
        $surname =  $_POST['surname'] ? $_POST['surname'] :  $_SESSION['surname'];
        $login =  $_POST['login'] ? $_POST['login'] : $_SESSION['login'];
        $pass =  $_POST['pass'] ? $_POST['pass'] : $_SESSION['pass'];
        $email =  $_POST['email'] ? $_POST['email'] : $_SESSION['email'];
        unset($_POST);
        if ($this->model->setUser($id, $name, $surname, $login, $pass, $email)) {
            header("Location:/profile/edit");
        }
    }
    public function imagesAction()
    {
        $id = $_SESSION['id'];
        $img = $_FILES['attachment']['name'];
        $tmp_name =$_FILES['attachment']['tmp_name'];
        move_uploaded_file($tmp_name, 'uploads/'.$img);
        $img = '/uploads/'.$img;
        $this->model->setImage($id, $img);
    }
}
