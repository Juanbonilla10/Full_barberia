<?php

require '../Libraries/Conexion.php';

class PayService
{
    private $table;
    private $connect;

    function __construct ()
    {
        $this->connect = new Conexion();
		$this->connect = $this->connect->connect();
		$this->table = 'pago_servicio';

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
        $codigo_pago = $data['codigo_pago'];
        $codigo_cliente = $data['codigo_cliente'];
        $nombre_barbero = $data['nombre_barbero'];
        $fecha_servicio = $data['fecha_servicio'];
        $hora_servicio = $data['hora_servicio'];
        $nombre_servicio = $data['nombre_servicio'];
        $valor_servicio = $data['valor_servicio'];
        $fecha_pago_barbero = $data['fecha_pago_barbero'];
        $saldo_total = $data['saldo_total'];
        $abono = $data['abono'];
        $saldo_pendiente = $data['saldo_pendiente'];
        $foranea = $data['tipo_service'];
        $sql = "INSERT INTO $this->table (Codigo_del_pago, Codigo_Cliente, Nombre_Barbero, Fecha_Servicio, Hora_servicio, Nombre_Servicio, Valor_servicio, Fecha_pago_servicio, Saldo_Total, Abono, Saldo_Pendiente, Id_tipo_Servicio) 
                VALUES ('$codigo_pago','$codigo_cliente','$nombre_barbero','$fecha_servicio','$hora_servicio','$nombre_servicio','$valor_servicio','$fecha_pago_barbero','$saldo_total','$abono','$saldo_pendiente','$foranea')";
        $response = $this->connect->query($sql);

        if ($response) {
            return true;
        } else {
            return false;
        }
    }
    

}

