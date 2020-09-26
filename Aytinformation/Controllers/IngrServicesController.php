<?php

require '../Models/IngrServicios.php';

class IngresoProController 
{
	private $IngresoServicio;

	function __construct ()
	{
		$this->IngresoServicio = new IngresoServicio();
	}
	
	public function getServices() 
	{

		//print_r($this->ingresoPro->getInventory());die;
		$date = $this->IngresoServicio->getServices();
		require_once '../Views/IngresosServices.php';
	}
}

$class = new IngresoProController();
$class->getServices();

?>

