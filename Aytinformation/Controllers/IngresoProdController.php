<?php

require '../Models/IngresoPro.php';

class IngresoProController 
{
	private $ingresoPro;

	function __construct ()
	{
		$this->ingresoPro = new IngresoPro();
	}
	
	public function getInventory() 
	{

		//print_r($this->ingresoPro->getInventory());die;
		$data = $this->ingresoPro->getInventory();
		require_once '../Views/IngresoProd.php';
	}
}

$class = new IngresoProController();
$class->getInventory();

?>

