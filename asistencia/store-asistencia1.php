<?php 
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
include_once('asistencia.php');

$asistencia= new asistencia();
$asistencia->storeAsistencia1();

?>