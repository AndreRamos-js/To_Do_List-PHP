<?php

namespace Classes;
use PDO;

class Bd {
    private static $conn;

    public static function getConn(){
        self::$conn = new PDO('mysql:host=' .BD_HOST. ':' .BD_PORT. ';dbname' .BD_NAME, BD_USER, BD_PASS);
        return self::$conn;
    }
}
