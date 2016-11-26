<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>U.E "Nuestra Señora del Carmen" </title>

<link rel="stylesheet" type="text/css" href="styleformueditar.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/SISTEMA/CSS/Style_Sistema.css"/>

</head>
</head>

<body>
<!-- Inicio - Encabezado de Pagina -->

	<table id="Tabla_Principal">

<img src="/SISTEMA/Imagenes_Sistema/LogoMinisterio.jpg" id="img_Logo_Ministerio">
<th>
<a href="/SISTEMA/Inicio/Inicio.php" title="Pagina de inicio"><img src="/SISTEMA/Imagenes_Sistema/inces.png" id="img_Logo_Escuela"></a>
</th>
<th>
 <h2 id="h2"> Sistema de Control de Asistencia del inces </h2>
</th>
	</table>
<!-- Final - Encabezado de Pagina -->
<!-- Inicio Del Menu Lateral-->
<?php include realpath(__DIR__.'/../../menu.php'); ?>
<!-- Final Del Menu Lateral-->

<div id="contact">
	<h1>Editar Personal</h1>
<form  action="/SISTEMA/Gestionar_Personal/Registro_De_Usuario/modifica.php" enctype="multipart/form-data" method="POST" name="formulario" id="formulario">
		<fieldset>
		<h3>Busqueda </h3>

		<label class="label_formulario" for="busqueda">Cedula:</label>
      <input type="search" id="busqueda" name="cedula" placeholder="Ej: 12345678" required />
			<input type="submit" value="Buscar" />
			
			
		</fieldset>
	</form>
</div>

</body>
</html>