<?php

require '../Libraries/Conexion.php';

class IngresoPerson
{
	private $table;
	private $connect;

	function __construct ()
	{
		$this->connect = new Conexion();
		$this->connect = $this->connect->connect();
		$this->table = 'usuarios';
	}
	
	public function getInvenEm(): array 
	{
		$sql = 'SELECT * FROM '. $this->table;
		$response = $this->connect->query($sql);
		return $response->fetchAll();
	}
	public function saveIngress($data)
    {
        $empleadonombre = $data['nombres'];
        $identidad = $data['identificacion'];
        $date = $data['fecha'];
        $numero = $data['telefono'];
        $direction = $data['direccion'];
        $nacimiento = $data['fechana'];
        $email = $data['correo'];
        $sex = $data['genero'];
		$contras = $data['passwo'];
		$foranea = $data['cod_rol'];
        $sql = "INSERT INTO $this->table (Num_Identificacion, Nombres_y_apellido, Telefono, Fecha_de_nacimiento, Direccion, Genero, Email, Contraseña, Cod_rol) 
                VALUES ('$identidad','$empleadonombre','$numero','$nacimiento','$direction','$sex','$email','$contras', '$foranea')";
        $response = $this->connect->query($sql);

        if ($response) {
            return true;
        } else {
            return false;
        }
    }
}

//$class = new IngresoPro();
//$class->getInventory();

?>