<?php 
class Database{
    private static $conn;
    
    public static function conectar(){
        if(!self::$conn){
            self::$conn = new PDO(
                "pgsql:host=192.168.10.21;port=5432;
                dbname=armas",
                "armas",
                "armas",
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        }
        return self::$conn;
    }
}

?>