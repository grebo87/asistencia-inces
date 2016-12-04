<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>inces</title>

<link rel="stylesheet" type="text/css" href="/SISTEMA/CSS/Style_Sistema.css"/>
<link rel="stylesheet" type="text/css" href="Style_Gestionar_Reporte.css"  />
</head>



<body>
<div>
<!-- Inicio - Encabezado de Pagina -->

    <table id="Tabla_Principal">

<tr>
    <img src="/SISTEMA/Imagenes_Sistema/LogoMinisterio.jpg" id="img_Logo_Ministerio">
</tr>
<th>
<a href="/SISTEMA/Inicio/Inicio.php" title="Pagina de inicio"><img src="/SISTEMA/Imagenes_Sistema/inces.png" id="img_Logo_Escuela"></a>
</th>
<th>
 <h2 id="h2"> Sistema de Control de Asistencia del inces </h2>
</th>
    </table>
<!-- Final - Encabezado de Pagina -->

<!-- Inicio Del Menu Lateral-->
<?php include realpath(__DIR__.'/../menu.php'); ?>
<!-- Final Del Menu Lateral-->

<!-- Formulario de Registro De Usuario -->


<div id="Contacto">
<h1>Datos del Usuario </h1>
    <table border="1" id="table-usuario">
    	
    
<?php
  include_once('usuario.php');

 $usuario= new usuario();
 $usuario->consultarUsuario($_POST['cedula']);
  
  ?>
  </table>
</div>



</body>
</html>