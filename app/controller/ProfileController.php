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

        $name = $_POST['name'] ? $this->clean($_POST['name']) : $_SESSION['name'];
        $surname = $_POST['surname'] ? $this->clean($_POST['surname']) : $_SESSION['surname'];
        $login = $_POST['login'] ? $this->clean($_POST['login']) : $_SESSION['login'];
        $pass = $_POST['pass'] ? $this->clean($_POST['pass']) : $_SESSION['pass'];
        $email = $_POST['email'] ? $_POST['email'] : $_SESSION['email'];

        unset($_POST);
        if ($this->model->setUser($id, $name, $surname, $login, $pass, $email)) {
            $this->imagesAction();
            header("Location:/profile/edit");
        }
    }

    public function imagesAction()
    {
        $id = $_SESSION['id'];
        $tmp_name = $_FILES['attachment']['tmp_name'];

        if (is_uploaded_file($tmp_name)) {
            $data = $this->model->delImage($id);
            $data = trim($data['img'], '/');
            unlink($data);
            $img = $_FILES['attachment']['name'];
            move_uploaded_file($tmp_name, 'uploads/' . $img);
            $img = '/uploads/' . $img;
            $this->model->setImage($id, $img);
        } else {
            echo 'Ошибка загрузки файла';
        }
    }

    public function clean($value)
    {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
        return $this->check_length($value);
    }

    public function check_length($value)
    {
        if (strlen($value) >= 3 && strlen($value) <= 10) {
            return $value;
        } else {
            return $value = "от 3 до 10 символов";
        }
    }
}
