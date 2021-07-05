<?php

namespace app\model;

use app\lib\Db;
use PDO;

class Account
{
    public $id;
    public $name;
    public $surname;
    public $pass;
    public $email;

    public function log($login, $pass)
    {
        $db = new Db();

        $sql = "SELECT * FROM profile WHERE login = :login AND pass = :pass";
        $stat = $db->db->prepare($sql);
        $stat->bindValue(":login", $login);
        $stat->bindValue(":pass", $pass);
        if ($stat->execute()) {
            return $stat->fetch(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }

    public function reg(): bool
    {
        $db = new Db();

        if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['login']) &&
            !empty($_POST['pass']) && !empty($_POST['email'])) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            unset($_POST);

            $sql = "INSERT INTO profile ( name, surname, login, pass, email) VALUES ( :name, :surname, :login, :pass, :email)";
            $stat = $db->db->prepare($sql);
            $stat->bindValue(":name", $name);
            $stat->bindValue(":surname", $surname);
            $stat->bindValue(":login", $login);
            $stat->bindValue(":pass", $pass);
            $stat->bindValue(":email", $email);

            if ($stat->execute()) {
                return true;
            } else {
                return false;
            }
        }
        return false;
    }
}
