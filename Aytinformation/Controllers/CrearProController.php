<?php

require '../Models/CrearProd.php';

class CrearProController 
{
	private $CrearPro;

	function __construct ()
	{
		$this->CrearPro = new CrearPro();
	}
	
	public function getCrearPro() 
	{

		
		$dates = $this->CrearPro->getCrearPro();
		require_once '../Views/IngresoProdCreado.php';
	}
}

$class = new CrearProController();
$class->getCrearPro();

?>
