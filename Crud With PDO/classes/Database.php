<?php

include "config.php";

class Database
{
	
	private static $pdo;

	// creating a database connection

	public static function connection(){

		if (!isset(self::$pdo)) {

			try {

			self::$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
			
		    } catch (PDOException $e) {

			echo $e->getMessage();
			
		    }	
		}

		return self::$pdo;

	}

	// using PDO prepared statemnet 
	
	public static function prepareQuery($sql){
		return self::connection()->prepare($sql);
	}
}




?>