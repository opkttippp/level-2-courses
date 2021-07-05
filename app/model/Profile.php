<?php

namespace app\model;

use app\lib\Db;
use PDO;

class Profile
{
    public function getUser($id)
    {

        $db = new Db();
        $sql = "SELECT * FROM profile WHERE id = :id";
        $stat = $db->db->prepare($sql);
        $stat->bindValue(":id", $id);
        $stat->execute();
        return $stat->fetch(PDO::FETCH_ASSOC);
    }

    public function setUser($id, $name, $surname, $login, $pass, $email)
    {
        $db = new Db();
        $sql = "UPDATE profile SET name = :name, surname = :surname, login = :login, pass = :pass,
                   email = :email WHERE id = :id";
        $stat = $db->db->prepare($sql);
        $stat->bindValue(":id", $id);
        $stat->bindValue(":name", $name);
        $stat->bindValue(":surname", $surname);
        $stat->bindValue(":login", $login);
        $stat->bindValue(":pass", $pass);
        $stat->bindValue(":email", $email);
        if ($stat->execute()) {
            return true;
        }
    }

    public function setImage($id, $img)
    {
        $db = new Db();
        $sql = ("UPDATE profile SET img = :img WHERE id = :id");
        $stat = $db->db->prepare($sql);
        $stat->bindValue(":id", $id);
        $stat->bindValue(":img", $img);
        if ($stat->execute()) {
            header("Location:/profile/edit");
        }
    }

    public function delImage($id)
    {
        $db = new Db();
        $sql = ("SELECT img FROM profile WHERE id = :id");
        $stat = $db->db->prepare($sql);
        $stat->bindValue(":id", $id);
        $stat->execute();
        return $stat->fetch(PDO::FETCH_ASSOC);
    }
}
