<?php 
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('personal.php');
$personal= new personal();

include '../layouts/head.php';
include '../layouts/nav.php';
include '../layouts/sidebar.php';
?>		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<!-- breadcrumb  -->
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Personal</li>
			</ol>
		</div><!--/.row-->

		<!-- Tituo de la pagina  -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registrar Personal</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
			<a href="index.php" class="btn btn-default">Regresar</a>
			<br><br>
				<form  action="store-personal.php" enctype="multipart/form-data" method="POST" name="formulario" id="formulario">
    					<?php include realpath('form-personal.php'); ?>
    			</form>
			</div>
		
		</div><!--/.row-->
		
		
		
	</div>	<!--/.main-->

<?php include '../layouts/footer.php'; ?>

