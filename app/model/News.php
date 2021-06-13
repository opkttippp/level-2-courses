<?php

namespace app\model;

use app\core\Model;
use PDO;

class News extends Model
{
    public function getNews()
    {
        $conn = new PDO('mysql:host=localhost;dbname=BASE', 'tttolll', 'tttolll');

        $sql = "SELECT * FROM article";
        $result = $conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
