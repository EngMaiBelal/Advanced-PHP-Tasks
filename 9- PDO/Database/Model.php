<?php 
namespace Database;
class Model{
    protected $connection;
    public function __construct(){
        $this->connection = db::$connection;
    }
}

?>