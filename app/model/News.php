<?php

namespace app\model;

use app\core\Model;
use app\lib\Db;

class News extends Model
{
    public function getNews()
    {
        $db = new Db();
        return $db -> queryyy('SELECT * FROM article');
    }
}
