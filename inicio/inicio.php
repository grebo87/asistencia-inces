<?php 
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include '../layouts/head.php';
include '../layouts/nav.php';
include '../layouts/sidebar.php';
?>		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<!-- breadcrumb  -->
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<!-- <li class="active">Dashboard</li> -->
			</ol>
		</div><!--/.row-->

		<!-- Tituo de la pagina  -->
		<div class="row">
			<div class="col-lg-12">
				<!-- <h1 class="page-header">Dashboard</h1> -->
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<center>
					<img src="/SISTEMA/Imagenes_Sistema/inces.png" height="400" width="400">
				</center>
				
			</div>
		
		</div><!--/.row-->
		
		
		
	</div>	<!--/.main-->

<?php include '../layouts/footer.php'; ?>	








































<!-- <!DOCTYPE html>

<html>
<head>
<meta charset="utf-8" />
<title>inces </title>

<link rel="stylesheet" type="text/css" href="/SISTEMA/CSS/Style_Sistema.css"/>
<link rel="stylesheet" type="text/css" href="style_Formulario_RegUser.css"  />
</head>

<body>
<div>
<!-- Inicio - Encabezado de Pagina 

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
<!-- Final - Encabezado de Pagina
<!-- Inicio Del Menu Lateral-->
<?php //include realpath(__DIR__.'/../menu.php'); ?>
<!-- Final Del Menu Lateral

<!-- Formulario de Registro De Usuario 

<table id="Tabla_Registro">

<div id="Contacto">
 
</div>
</table>
</body>
</html>
 -->
