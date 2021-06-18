<?php


namespace app\model;


use app\lib\Db;
use PDO;

class Main
{

    public function getData()
    {
        $db = new Db();

        $res = $db->db->query('SELECT * FROM article');
        return $res->fetch(PDO::FETCH_ASSOC);
    }
}