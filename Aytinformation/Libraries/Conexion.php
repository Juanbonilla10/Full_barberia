<?php

require '../Config/Config.php';

class Conexion
{
	private $connect;
	
	public function connect() 
	{
		$connection = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charser=utf8';
		
		try {
			$this->connect = new PDO($connection, DB_USER, DB_PASSWORD);
			$this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $this->connect;
		} catch (PDOException $e) {
			$this->connect = 'Error de conexión.';
		}
	}
}

?>