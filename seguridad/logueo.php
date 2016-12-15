<?php
  include_once('seguridad.php');

 $seguridad= new seguridad();
 $seguridad->logueo($_POST['login'],$_POST['contrasena']);
  
  ?>