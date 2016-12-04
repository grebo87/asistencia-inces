<?php 
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('usuario.php');
$usuario= new usuario();
$usuario->updateUsuario($_POST['cedula'],$_POST['tipo'],$_POST['estatus'],$_POST['id']);

?>