<?php 
       ini_set('error_reporting', E_ALL);
        session_start();
        if ( $_SESSION['id'] ) {
          
?>


<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8" />
<title>inces</title>

<link rel="stylesheet" type="text/css" href="/SISTEMA/CSS/Style_Sistema.css"/>
<link rel="stylesheet" type="text/css" href="style_Formulario_RegUser.css"  />
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
<?php include realpath(__DIR__.'/../menu.php'); 
 include_once('usuario.php');
 $usuario = new usuario();
?>
<!-- Final Del Menu Lateral-->

<!-- Formulario de Registro De Usuario -->

<?php
  include_once('usuario.php');

 $usuario= new usuario();
 $datos=$usuario->findUsuario($_POST['cedula']);
 if ($datos != 0) { ?>
 <div id="Contacto">
    <h1>Editar Usuario</h1>
    <form  action="/SISTEMA/usuario/update.php" enctype="multipart/form-data" method="POST" name="formulario" id="formulario">
    		<fieldset>	
		    	<?php include 'form-edit-usuario.php';	?>
			</fieldset>
    </form>
</div>
 		
 <?php }else{
 	echo"<script> alert ('No hay Usuario con esa cedula!');</script>";
	echo"<script> location.href='editar-usuario.php';</script> ";
 }
  
  ?>



</body>
</html>



<?php
} else {
           session_unset();
           header("location:../index.html");
         }
          
?>