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
				<li class="active">Reportes</li>
			</ol>
		</div><!--/.row-->

		<!-- Tituo de la pagina  -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Generar Reportes</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<form role="form" method="post" action="show-reporte-inasistencia.php">
							<fieldset>
								<div class="row">
        							<div class="col-md-6">
											<label class="label_formulario" for="cedula">Cedula </label>
											<select name="cedula"  id="cedula"  required class="form-control">
													<?php echo $personal->allCedulas(); ?>
											</select>
									</div>
								</div><br>
								
								<div class="row">
        							<div class="col-md-6">
        								<label class="label_formulario" for="tipo">Tipo </label>
									    <select name="observacion" id="observacion"  type="text" class="form-control"  required>
									        <option selected value=""> Elige una opción </option>
									        <option value="Inasistencia">Inasistencia</option>
									        <option value="Asistencia">Asistencia</option>
									    </select>
									</div>
								</div><br><br>

								<div class="row" id="justificado">
        							<div class="col-md-6">
        								<label class="label_formulario" for="observacion">Observacion </label>
									    <select name="observacion1"  type="text" class="form-control"  required>
									        <option selected value=""> Elige una opción </option>
									        <option value="Justificada">Justificada</option>
									        <option value="Injustificada">Injustificada</option>
									    </select>
									</div>
								</div><br><br>

								<div class="row">
        							<div class="col-md-6">
        								<label class="label_formulario" for="desde">Desde </label>
									    <input type="date" name="desde" id="desde" class="form-control" >
									</div>
								</div><br><br>

								<div class="row">
        							<div class="col-md-6">
        								<label class="label_formulario" for="hasta">Hasta </label>
									    <input type="date" name="hasta" id="hasta" class="form-control" >
									</div>
								</div><br><br>
							
								<div class="form-group">
									<input type="submit" value="Buscar" class="btn btn-primary">
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
    $( "#justificado" ).hide();

    $("#observacion").change(function() {
    	
    	if ($(this).val() == 'Inasistencia') {
    		$( "#justificado" ).show();
    	} else{
    		$( "#justificado" ).hide();
    	};
    	
    	
    });
});						 
</script>