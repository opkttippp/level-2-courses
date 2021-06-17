<?php

namespace app\lib;

use PDO;

class Db
{
    public PDO $db;

    public function __construct()
    {
        $config = require 'app/config/Db.php';
        $this ->db = new PDO(
            'mysql:host='.$config['host'].';dbname='.$config['name'],
            $config['user'],
            $config['password']
        );
    }
}
