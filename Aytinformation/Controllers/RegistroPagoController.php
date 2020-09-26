<?php

require '../Models/RegistroPago.php';

class RegisPagoController 
{
	private $RegistroPago;

	function __construct ()
	{
		$this->RegistroPago = new RegistroPago();
	}
	
	public function getPago() 
	{

		//print_r($this->ingresoPro->getInventory());die;
		$data = $this->RegistroPago->getPago();
		require_once '../Views/PagoServicio.php';
	}
}

$class = new RegisPagoController();
$class->getPago();

?>

