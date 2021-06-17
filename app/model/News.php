<?php

namespace app\model;

use app\core\Model;
use app\lib\Db;
use PDO;

class News extends Model
{
    public function getNews()
    {
        $db = new Db();

        $res = $db->db->query('SELECT * FROM article');
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}
