<?php

namespace Model;

use PDO;

class Database
{
    protected static ?PDO $connection = null;

    public function connection(): PDO
    {
        $connection = self::$connection;

        if (!$connection) {
            $connection = new PDO(
                'mysql:host=mysql-8.2;port=3306;dbname=mvc',
                'root'
            );

            self::$connection = $connection;
        }

        return $connection;
    }
}
