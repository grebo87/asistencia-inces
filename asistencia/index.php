<?php 
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include '../personal/personal.php';
$personal = new personal();


include '../layouts/head.php';
include '../layouts/nav.php';
include '../layouts/sidebar.php';
?>		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<!-- breadcrumb  -->
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Asistencia</li>
			</ol>
		</div><!--/.row-->

		<!-- Tituo de la pagina  -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registro de Asistencia</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<form role="form" method="post" action="store-asistencia.php">
							<fieldset>
								<div class="row">
        							<div class="col-md-6">
											<label class="label_formulario" for="cedula">Cedula </label>
											<select name="cedula"  id="cedula"  required class="form-control">
													<?php echo $personal->allCedulas(); ?>
											</select>
									</div>
								</div><br>
								<div class="form-group">
									<input type="submit" value="Enviar" class="btn btn-primary">
								</div>								
								

							</fieldset>
							<br>
						</form><br>	
			</div>
		
		</div><!--/.row-->
		
		
		
	</div>	<!--/.main-->

<?php include '../layouts/footer.php'; ?>	

<script>
	$(document).ready(function(){
    $('#cedula').select2();
});						 
</script>