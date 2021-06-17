<?php

namespace app\model;

use app\core\Model;
use app\lib\Db;
use PDO;

class Account extends Model
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
        $stat->execute();
        $res = $stat->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    public function reg($name, $surname, $login, $pass, $email)
    {
        $db = new Db();

        $sql = "INSERT INTO profile ( name, surname, login, pass, email) VALUES ( :name, :surname, :login, :pass, :email)";
        $stat = $db->db->prepare($sql);
        $stat->bindValue(":name", $name);
        $stat->bindValue(":surname", $surname);
        $stat->bindValue(":login", $login);
        $stat->bindValue(":pass", $pass);
        $stat->bindValue(":email", $email);
        if ($stat->execute()) {
            return true;
        }
    }
}
