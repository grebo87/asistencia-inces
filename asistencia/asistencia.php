<?php 
session_start();
include_once('../conectar.php');
/**
* 
*/
class asistencia 
{
	private $conectar;

	function __construct()
	{
		$this->conectar = new conectar();
	}

	public function findAsistencia()
	{
		$fecha=date('d-m-Y');
		$cedula=$_POST['cedula'];
		$sql="select * from asitencia where cedula='$cedula' and fecha='$fecha' and entrada='1'";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return 1;
		}else{
			return 0;
		}
	}

	public function storeAsistencia()
	{
		$fecha=date('d-m-Y');
 		$hora =date('h:i:s');
		$cedula=$_POST['cedula'];
			
		$sql="INSERT INTO asitencia(fecha,cedula,hora) VALUES ('$fecha','$cedula','$hora')";

		$result= pg_query($this->conectar->con(),$sql);

		if(!$result){
				echo"<script> alert ('Uno de sus datos no han sido correctos ¡Vuelva a Intentarlo!');</script>";
				echo"<script> location.href='index.php'</script> ";
		} else{ 
				echo"<script> alert ('datos guardados!');</script>";
				echo"<script> location.href='index.php'</script> ";
		}

	}


	public function storeAsistencia1()
	{
		$fecha=date('d-m-Y');
 		$hora =date('h:i:s');
		$cedula=$_POST['cedula'];
			
		$sql="INSERT INTO asitencia(fecha,cedula,hora) VALUES ('$fecha','$cedula','$hora')";

		$result= pg_query($this->conectar->con(),$sql);					



		if(!$result){
				echo"<script> alert ('Uno de sus datos no han sido correctos ¡Vuelva a Intentarlo!');</script>";
				echo"<script> location.href='index.php'</script> ";
		} else{ 
				echo"<script> alert ('datos guardados!');</script>";
				echo"<script> location.href='../index.php'</script> ";
		}

	}

	public function storeInasistencia()
	{
		
			$fecha=date('d-m-Y');
 			$hora =date('h:i:s');
 			$cedula = $_POST['cedula'];
 			$observacion = $_POST['observacion'];

			$sql="INSERT INTO inasitencia(fecha,hora,cedula,observacion) VALUES ('$fecha','$hora','$cedula','$observacion')";

			$result= pg_query($this->conectar->con(),$sql);					



			if(!$result){
				echo"<script> alert ('Uno de  datos no han sido correctos ¡Vuelva a Intentarlo!');</script>";
				echo"<script> location.href='inasistencia.php'</script> ";
			}else{
				echo"<script> alert ('datos guardados!');</script>";
				echo"<script> location.href='inasistencia.php'</script> ";
			}

	}


	public function getPersonal($cedula = '')
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

	public function all($cedula='')
	{
		$sql="select * from asitencia where cedula='$cedula'";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return pg_fetch_all($result);
		}else{
			return 0;
		}
	}

	public function allInasistencia($cedula='')
	{
		$sql="select * from inasitencia where cedula='$cedula'";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return pg_fetch_all($result);
		}else{
			return 0;
		}
	}


	public function regitarEntrada()
	{
		$fecha=date('d-m-Y');
 		$hora =date('h:i:s');
		$cedula=$_POST['cedula'];
			
		$sql="INSERT INTO asitencia(fecha,cedula,hora,entrada) VALUES ('$fecha','$cedula','$hora','1')";

		$result= pg_query($this->conectar->con(),$sql);	
		if(!$result){
				echo"<script> alert ('Uno de sus datos no han sido correctos ¡Vuelva a Intentarlo!');</script>";
				echo"<script> location.href='index.php'</script> ";
		} else{ 
				echo"<script> alert ('datos guardados!');</script>";
				echo"<script> location.href='index.php'</script> ";
		}

	}


	public function registrarSalida()
	{
		$fecha=date('d-m-Y');
 		$cedula=$_POST['cedula'];
			
		$sql="UPDATE asitencia set salida='1' where cedula='$cedula' and fecha='$fecha' and entrada='1'";

		$result= pg_query($this->conectar->con(),$sql);	
		if(!$result){
				echo"<script> alert ('Uno de sus datos no han sido correctos ¡Vuelva a Intentarlo!');</script>";
				//echo"<script> location.href='index.php'</script> ";
		} else{ 
				echo"<script> alert ('datos guardados!');</script>";
				echo"<script> location.href='index.php'</script> ";
		}

	}


	


}


?>