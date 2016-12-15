<?php 
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('usuario.php');
$usuario= new usuario();
$usuario->deleteUsuario($_GET['id']);

?>