<?php

require '../Models/Proveedor.php';

class ProveeController 
{
	private $IngresoProvee;

	function __construct ()
	{
		$this->IngresoProvee = new IngresoProvee();
	}
	
	public function getProveer() 
	{

		
		$datas = $this->IngresoProvee->getProveer();
		require_once '../Views/IngresoProvee.php';
	}
}

$class = new ProveeController();
$class->getProveer();

?>

