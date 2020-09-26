<?php
require '../Libraries/Conexion.php';

class NewService
{
	private $table;
	private $connect;

	function __construct ()
	{
		$this->connect = new Conexion();
		$this->connect = $this->connect->connect();
		$this->table = 'servicios';
	}

	/**
	 * @return array
	 */
	public function getIngress()
	{
		$sql = 'SELECT * FROM '. $this->table;
		$response = $this->connect->query($sql);
		return $response->fetchAll();
	}

    /**
     * @param $data
     * @return bool
     */
    public function saveIngress($data)
    {
        $id_regis = $data['id_regis'];
        $nombre_servicio = $data['nombre_servicio'];
        $tipo_servicio= $data['tipo_servicio'];
        $valor_ser = $data['valor_ser'];
        $codigo_ser = $data['codigo_ser'];
        $dirigido = $data['dirigido'];
        $fecha_crea = $data['fecha_crea'];
        $hora_crea = $data['hora_crea'];
        $id_cita = $data['id_cita'];
        $sql = "INSERT INTO $this->table (Id_Regis_Ser, Nombre_Servicio, Valor_Servicio, Codigo_Servicio, A_quien_va_dirigido, Fecha_Crea, Hora, Id_citas, Id_tipo_Servicio) 
                VALUES ('$id_regis' ,'$nombre_servicio','$valor_ser','$codigo_ser','$dirigido','$fecha_crea','$hora_crea','$id_cita','$tipo_servicio')";
        $response = $this->connect->query($sql);

        if ($response) {
            return true;
        } else {
            return false;
        }
    }
    
}
?>