<?php

 if(!defined('__CONFIG__'))  {
    exit('YOU DO NOT HAVE A CONFIG FILE');
}

class DB {
    protected static $con;

    private function __construct() {

        try {

            self::$con = new PDO( 'mysql:charset=utf8mb4; host=localhost; port=3306; dbname=login_course', 'root', '' );
            self::$con -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            self::$con -> setAttribute( PDO::ATTR_PERSISTENT, FALSE );

        }   catch (PDOException $e) {
            echo "Could not connect to database";
            exit;
        }
    }

public static function getConnection() {
    //if this instance was not been started. start it.
        if(!self::$con) {
            new DB();
        }

    //Return the writable db connection
    return self::$con;
}
}
?>