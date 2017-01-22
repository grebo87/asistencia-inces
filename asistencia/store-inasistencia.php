<?php 
include_once('../seguridad/seguridad.php');
ini_set('display_errors', '1');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('asistencia.php');

$asistencia= new asistencia();
$asistencia->storeInasistencia();

?>