<?php

require '../Models/RegistroPersonal.php';

class RegistroPersoController 
{
	private $RegistroPerso;

	function __construct ()
	{
		$this->RegistroPerso = new RegistroPerso();
	}
	
	public function getRegistroper() 
	{

		//print_r($this->ingresoPro->getInventory());die;
		$data = $this->RegistroPerso->getRegistroper();
		require_once '../Views/RegisterPersons.php';
	}
}

$class = new RegistroPersoController();
$class->getRegistroper();

?>
