<?php

namespace app\database;

use PDO;

class Connection
{
    private static $pdoInstance = null;

    public static function getConnection()
    {

        $dbhost = $_ENV['DBHOST'];
        $dbport = $_ENV['DBPORT'];
        $dbname = $_ENV['DBNAME'];
        $dbuser = $_ENV['DBUSER'];
        $dbpass = $_ENV['DBPASS'];

        if (!self::$pdoInstance) {
            self::$pdoInstance = new PDO('pgsql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpass, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            ]);
        }

        return self::$pdoInstance;
    }
}
