<?php

namespace app\model;

use app\core\Model;

class News extends Model
{
    public function getNews()
    {
        return require "Posts_list.php";
    }
}
