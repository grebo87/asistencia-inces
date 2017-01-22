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
		$cedula=$_GET['cedula'];
		$sql="select * from asitencia where cedula='$cedula' and fecha='$fecha' and entrada  is not null ";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return 1;
		}else{
			return 0;
		}
	}

	public function findAsistencia1()
	{
		$fecha=date('d-m-Y');
		$cedula=$_GET['cedula'];
		$sql="select * from asitencia where cedula='$cedula' and fecha='$fecha' and entrada  is not null and salida  is not null";
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
		$cedula=$_GET['cedula'];
			
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
 			$observacion2 = null;
 			if ($_POST['observacion2']) {
 				$observacion2 = $_POST['observacion2'];
 			}
 			if ($observacion == 'Inasistencia' or $observacion == 'Retraso Injustificado' or $observacion == 'Observacion' ) {
 				$type = 'injustificada ';
 			} else {
 				$type = 'justificada';
 			}
 			
			$sql="INSERT INTO inasitencia(fecha,cedula,observacion,observacion2,type) VALUES ('$fecha','$cedula','$observacion','$observacion2','$type')";

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
 		$entrada =date('h:i:s a');
		$cedula=$_GET['cedula'];
			
		$sql="INSERT INTO asitencia(fecha,cedula,entrada) VALUES ('$fecha','$cedula','$entrada')";

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
		$salida =date('h:i:s a');
		$fecha=date('d-m-Y');
 		$cedula=$_GET['cedula'];
			
		$sql="UPDATE asitencia set salida='$salida' where cedula='$cedula' and fecha='$fecha' and entrada is not null ";

		$result= pg_query($this->conectar->con(),$sql);	
		if(!$result){
				echo"<script> alert ('Uno de sus datos no han sido correctos ¡Vuelva a Intentarlo!');</script>";
				echo"<script> location.href='index.php'</script> ";
		} else{ 
				echo"<script> alert ('datos guardados!');</script>";
				echo"<script> location.href='index.php'</script> ";
		}

	}


	public function entryDay($cedula)
	{
		$fecha = date('d-m-Y');
		$sql="select * from asitencia where cedula='$cedula' and fecha='$fecha'";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);
		$response = '<a title="Registrar Entrada" href="store-entry.php?cedula='.$cedula.'" data-id="'.$cedula.'" class="boton-entrada btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>';
		if ($encontrados > 0) {
			$asistencia = pg_fetch_array($result);
			if( !is_null($asistencia['entrada']) ){
				$response = date('h:i:s a', strtotime($asistencia['entrada']));
			}else{
				$response = '<a title="Registrar Entrada" href="store-entry.php?cedula='.$cedula.'" data-id="'.$cedula.'" class="boton-entrada btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>';
			}
			return $response;
		}else{
			return $response;
		}
	}


	public function exitDay($cedula)
	{
		$fecha = date('d-m-Y');
		$sql="select * from asitencia where cedula='$cedula' and fecha='$fecha'";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);
		$response = '<a title="Registrar Salida" href="store-exit.php?cedula='.$cedula.'" data-id="'.$cedula.'" class="boton-entrada btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>';
		if ($encontrados > 0) {
			$asistencia = pg_fetch_array($result);
			if( !is_null($asistencia['salida']) ){
				$response = date('h:i:s a', strtotime($asistencia['salida']));
			}else{
				$response = '<a title="Registrar Salida" href="store-exit.php?cedula='.$cedula.'" data-id="'.$cedula.'" class="boton-entrada btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>';
			}
			return $response;
		}else{
			return $response;
		}
	}


	public function findEntry()
	{
		$fecha=date('d-m-Y');
		$cedula=$_GET['cedula'];
		$sql="select * from asitencia where cedula='$cedula' and fecha='$fecha' and entrada  is not null";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return 1;
		}else{
			return 0;
		}
	}

	public function findExit()
	{
		$fecha=date('d-m-Y');
		$cedula=$_GET['cedula'];
		$sql="select * from asitencia where cedula='$cedula' and fecha='$fecha' and entrada  is not null";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return 1;
		}else{
			return 0;
		}
	}
	


}


?>