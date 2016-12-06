<?php 
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('vacaciones.php');
$vacaciones= new vacaciones();
$vacaciones->storeVacaciones();

?>