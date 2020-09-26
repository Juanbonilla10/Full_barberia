<?php

require '../Libraries/Conexion.php';

class IngreCliente
{
	private $table;
	private $connect;

	function __construct ()
	{
		$this->connect = new Conexion();
		$this->connect = $this->connect->connect();
		$this->table = 'cliente';
	}
	
	public function getCliente(): array 
	{
		$sql = 'SELECT * FROM '. $this->table;
		$response = $this->connect->query($sql);
		return $response->fetchAll();
	}
}

//$class = new IngresoPro();
//$class->getInventory();

?>
