<?php

class DB {
    public static $db_name = "todo_db";
    public static $username = "root";
    public static $host = "localhost";
    public static $password = "";

    private static function connect() {//prepared doc. object
        $pdo = new PDO ("mysql:host=".self::$host.";dbname=".self::$db_name.";charset=utf8", self::$username, self::$password);
        $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;

    }

    public static function query($sql, $params = array()){
        $statement = self::connect()->prepare($sql);
        $statement->execute($params);

        if (explode(' ', $sql)[0] == 'SELECT'){
            $data = $statement->fetchAll();

            return $data;
        }

        // return $statement;
        
    }

}

?>