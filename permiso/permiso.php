<?php
session_start();
include_once('../conectar.php');

/**
* 
*/
class permiso
{
	private $conectar;

	function __construct()
	{
		$this->conectar = new conectar();
	}

	public function storePermiso()
	{
		$cedula = $_POST["cedula"];
		$motivo = $_POST["motivo"];
		$inicio = $_POST["inicio"];
		$fin = $_POST["fin"];
		$observacion = $_POST["observacion"];
		$sql="INSERT INTO permisos(cedula,motivo,inicio,fin,observacion) VALUES ('$cedula','$motivo','$inicio','$fin','$observacion')";

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

	public function all($cedula = '')
	{
		$sql="select * from permisos where cedula='$cedula'";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return pg_fetch_all($result);
		}else{
			return 0;
		}
	}
}