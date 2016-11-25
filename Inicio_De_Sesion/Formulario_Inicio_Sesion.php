<?php 
        session_start();
        session_unset();
        session_destroy();         
         
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>inces</title>

<link rel="stylesheet" type="text/css" href="/SISTEMA/CSS/Style_Sistema.css"/>

<link rel="stylesheet" type="text/css" href="style_Formulario.css"  />
</head>

<body>
<div>
<!-- Inicio - Encabezado de Pagina -->

<table id="Tabla_Principal">

<th>
<img src="/SISTEMA/Imagenes_Sistema/inces.png" id="img_Logo_Escuela"></th>
<th>
 <h2 id="h2"> Sistema de Control de Asistencia del inces </h2>
</th>
<!-- Final - Encabezado de Pagina -->


<table id="Tab_IS">
<!--Formulario de Inicio de Sesion-->
	 
<div id="contact">

	<h1>Inicio de Sesión</h1>
	<form  action="/SISTEMA/Gestionar_Personal/Registro_De_Usuario/logueo.php" enctype="multipart/form-data" method="POST" name="formulario" id="formulario">
		<fieldset>
			<label  >Clave</label><br>
            <input type="text" id="cedula" name="cedula" placeholder="Ej:27637377"  required />
			<br/>
			<label >Correo </label>
			<br />
			<input type="text" id="correo" name="correo" placeholder="Ej:usuario@dominio.com" required />
			
	
			<input type="submit" value="Iniciar Sesión"  id="iniciar"  / > 
			<input type="reset" value="Borrar " id="borrar" />
			
	 </form>
</br>
   <a href="/SISTEMA/index.html">
   <input type="button"  value="Atras" >
    </a>
    </table>
     </fieldset>

</div>
</body>
</html>