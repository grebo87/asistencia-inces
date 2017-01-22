<?php 
//ini_set('display_errors', '1');
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('asistencia.php');
$asistencia= new asistencia();
echo $asistencia->findExit();
//die();
if ($asistencia->findExit() == 1) {
	 	$asistencia->registrarSalida();
} else {
		echo"<script> alert ('debe tener registrada la entrada del dia!');</script>";
		echo"<script> location.href='index.php'</script> ";
}

?>