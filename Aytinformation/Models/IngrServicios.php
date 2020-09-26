<?php

require '../Libraries/Conexion.php';

class IngresoServicio
{
	private $table;
	private $connect;

	function __construct ()
	{
		$this->connect = new Conexion();
		$this->connect = $this->connect->connect();
		$this->table = 'servicios';
	}
	
	public function getServices(): array 
	{
		$sql = 'SELECT * FROM '. $this->table;
		$response = $this->connect->query($sql);
		return $response->fetchAll();
	}
}

//$class = new IngresoPro();
//$class->getInventory();

?>

