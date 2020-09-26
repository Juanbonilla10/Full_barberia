<?php

class Conexion
{
	private $host;
	private $user;
	private $password;
	private $db;
	private $conect;


	public function _construct () 
	{
		$this->host = "localhost";
		$this->user = "root";
		$this->password ="";
		$this->db ="versionbarber";

		$connection = 'mysql:host='.$this->host.';dbname='.$this->db.';charser=utf8';
		print_r($connection);die;
		try {
			$this->conect = new PDO($connection, $this->user, $this->password);
			print_r($this->connect);die;
		} catch (PDOException $e) {
			$this->conect = 'Error de conexión.';
			print_r('Error: '. $e->getMessage());
		}

	}

	public function conect ()
	{
		print_r("test");die;
		return $this->connect;
	}
}

?>