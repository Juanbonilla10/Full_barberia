<?php

require '../Models/Inventarios.php';

class InventariosController 
{
	private $InventoryPro;

	function __construct ()
	{
		$this->InventoryPro = new InventoryPro();
	}
	
	public function getInventary() 
	{

		$date = $this->InventoryPro->getInventary();
		require_once '../Views/Cosulta_Inventario.php';
	}
}

$class = new InventariosController();
$class->getInventary();

?>
