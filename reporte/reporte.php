<?php
session_start();
include_once('../conectar.php');

/**
* 
*/
class reporte
{
	private $conectar;

	function __construct()
	{
		$this->conectar = new conectar();
	}

	public function getPersonal($cedula='')
	{
		$sql="select * from personal where cedula='$cedula'";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return pg_fetch_array($result);
		}else{
			return 0;
		}
	}

	public function all($cedula = '', $observacion = '', $desde = '', $hasta = '', $observacion1 = '')
	{
		if ($observacion1 == 'Injustificada') {
			$sql="select * from inasitencia where cedula='$cedula' and fecha BETWEEN '$desde' AND '$hasta' and observacion = 'Inasistencia'";
		}else{
			$sql="select * from inasitencia where cedula='$cedula' and fecha BETWEEN '$desde' AND '$hasta' and observacion <> 'Inasistencia'";
		}
		
	
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return pg_fetch_all($result);
		}else{
			return 0;
		}
	}

	public function asistencia($cedula = '', $observacion = '', $desde = '', $hasta = '')
	{
		
		$sql="select * from asitencia where cedula='$cedula' and fecha BETWEEN '$desde' AND '$hasta'";
				
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return pg_fetch_all($result);
		}else{
			return 0;
		}
	}

	public function allHistoria($cedula = '')
	{
		$sql="select * from actividad where cedula='$cedula'";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return pg_fetch_all($result);
		}else{
			return 0;
		}
	}



}