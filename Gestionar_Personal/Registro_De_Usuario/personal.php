<?php
include_once('../../conectar.php');
include_once('usuario.php');

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$correo=$_POST['correo'];
$cargo=$_POST['cargo'];
$fecha_n=$_POST['fecha_n'];
$estatus='1';

$nuevo_usuario= new usuario($nombre,$apellido,$cedula,$correo,$cargo,$fecha_n,$estatus);
$nuevo_usuario->registrar_usuario();

;



?>
