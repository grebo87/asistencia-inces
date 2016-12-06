<?php 
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('personal.php');
$personal= new personal();
$personal->deletePersonal($_GET['id']);

?>