<?php 
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('permiso.php');
$permiso= new permiso();
$permiso->storePermiso();

?>