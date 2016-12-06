<?php 
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('personal.php');

$personal= new personal($_POST['nombre'],$_POST['apellido'],$_POST['cedula'],$_POST['cod_personal'],$_POST['fecha_n'],$_POST['correo'],$_POST['cargo'],$_POST['status']);
$personal->storePersonal();



?>