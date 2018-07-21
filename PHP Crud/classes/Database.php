<?php

require_once 'Config.php';

class Database{
    
    private $conn;

    protected function connect(){

        try{
            // set up a new connection
            $conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';',DB_USER,DB_PWD);
            // set attribute for error reporting and throwing exception
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // hold the connection
            return $conn;
        }catch(PDOException $e){
            die("Connection failed");
        }
        
    }

}

?>