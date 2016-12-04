<?php 
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('usuario.php');
$usuario= new usuario($_POST['cedula'],$_POST['login'],$_POST['contrasena'],$_POST['tipo'],$_POST['estatus']);
$usuario->registrarUsuario();

?>