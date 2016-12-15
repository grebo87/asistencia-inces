<?php 
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('asistencia.php');

$asistencia= new asistencia();
$asistencia->storeAsistencia();

?>