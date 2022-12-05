<?php
namespace Database;

class db{

    private static $host = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $dbname = "pdo_db";
    public static $connection;
    // private $port = "3306";

    public static function connection(){
        // self::$connection = new \PDO("mysql:host=$this->host;dbname=$this->dbname; port=($this->port)",$this->username ,$this->password)
        if(! self:: $connection){
          try {
            self::$connection = new \PDO("mysql:host=".self::$host.";dbname=".self::$dbname, self::$username,self::$password);
            
            // self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT); // PDO error mode = silent for error query
            // echo(self::$connection ->query("SELECT * FROM users"));

            // set the PDO error mode to exception by default exception
            self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            echo "Connected successfully";
            } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            }

          }
        return self:: $connection;
    }
}


db::connection();
db::connection();
db::connection();
db::connection();


?>


<!-- php -S 127.0.0.1:8000 -->