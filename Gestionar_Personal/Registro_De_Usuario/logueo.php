<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8" />
<title>inces</title>

<link rel="stylesheet" type="text/css" href="/SISTEMA/CSS/Style_Sistema.css"/>
<link rel="stylesheet" type="text/css" href="style_Formulario_RegUser.css"  />
</head>

<body>




    
<?php
  include_once('usuario.php');

 $usuario= new usuario();
 $usuario->logueo($_POST['login'],$_POST['contrasena']);
  
  ?>
</body>
</html> 