<?php
session_start();
include_once('../conectar.php');

/**
* 
*/
class vacaciones
{
	private $conectar;

	function __construct()
	{
		$this->conectar = new conectar();
	}

	public function storeVacaciones()
	{
		$cedula = $_POST["cedula"];
		$estado = $_POST["estado"];
		$inicio = $_POST["inicio"];
		$fin = $_POST["fin"];
		$observacion = $_POST["observacion"];
		$sql="INSERT INTO vacaciones(cedula,estado,inicio,fin,observacion) VALUES ('$cedula','$estado','$inicio','$fin','$observacion')";

		$result= pg_query($this->conectar->con(),$sql);					



		if(!$result){
				echo"<script> alert ('Uno de sus datos no han sido correctos ¡Vuelva a Intentarlo!');</script>";
				echo"<script> location.href='index.php'</script> ";
		} else{ 
				echo"<script> alert ('datos guardados!');</script>";
				echo"<script> location.href='index.php'</script> ";
		}
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

	public function all($cedula = '', $estado)
	{
		$sql="select * from vacaciones where cedula='$cedula' and estado='$estado'";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return pg_fetch_all($result);
		}else{
			return 0;
		}
	}
}