<?php

require '../Models/ClienteRes.php';

class IngresoClienteController 
{
	private $IngreCliente;

	function __construct ()
	{
		$this->IngreCliente = new IngreCliente();
	}
	
	public function getCliente() 
	{

		//print_r($this->ingresoPro->getInventory());die;
		$data = $this->IngreCliente->getCliente();
		require_once '../Views/RegistroCliente.php';
	}
}

$class = new IngresoClienteController();
$class->getCliente();

?>

