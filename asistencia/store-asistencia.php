<?php 
ini_set('display_errors', '1');
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('asistencia.php');

$asistencia= new asistencia();

if ($asistencia->findAsistencia() == 0) {
		$asistencia->regitarEntrada();
} else {
		$asistencia->registrarSalida();
}


?>