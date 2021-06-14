<?php

namespace app\lib;

use PDO;

class Db
{
    protected $db;

    public function __construct()
    {
        $config = require 'app/config/Db.php';
        $this ->db = new PDO(
            'mysql:host='.$config['host'].';dbname='.$config['name'],
            $config['user'],
            $config['password']
        );
    }
    public function queryyy($sql)
    {
        $query = $this->db->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
