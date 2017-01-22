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
				<li class="active">Inasistencia</li>
			</ol>
		</div><!--/.row-->

		<!-- Tituo de la pagina  -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registro de Inasistencia</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<form role="form" method="post" action="store-inasistencia.php">
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
        								<label class="label_formulario" for="cedula">Inasistencia Por: </label>
									    <select name="observacion" id="observacion" type="text" class="form-control"  required>
									        <option selected value="0"> Elige una opción </option>
									        <option value="Inasistencia">Inasistencia Injustificada</option>
									        <option value="Retraso Injustificado">Retraso</option>
									        <option value="Reposo Medico">Reposo Medico</option>
									        <option value="Observacion">Observacion</option>
									    </select>
									</div>
								</div><br><br>

								<div class="row">
        							<div class="col-md-6">
        								<textarea name="observacion2" id="observacion2" class="form-control"  style="display:none;"></textarea>
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

    $("#observacion").change(function (e) {
    	if ($(this).val() == 'Observacion') {
    			$("#observacion2").css('display','block');
    			$("#observacion2").focus();
    	} else{
    			$("#observacion2").css('display','none');
    	};
    });
});						 
</script>

































   <form  action="/SISTEMA/Gestionar_Personal/Registro_De_Usuario/inasistencia1.php" enctype="multipart/form-data" method="POST" name="formulario" id="formulario">
   <fieldset>
          <h1> Registro De Inasistencia </h1>
          <label class="label_formulario" for="cedula">Cedula </label>
  <input type="text" id="cedula" name="cedula" placeholder="Ej: 12345678" maxlength="8" required  />
    
            <label class="label_formulario" for="cargo">observacion </label>
   


      
       
            <input type="reset" value="Borrar información">
            
            <input type="submit" value="Registrar" />
            
            
        </fieldset>
    </form>