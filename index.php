<?php
	ini_set('display_errors', '1');
	include 'functions.php';
	$functions = new functions();
 ?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inces</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="js/select2/css/select2.min.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<div class="row" ><br>
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-4">
			<div class="login-panel panel panel-default" style="border: 0px; background-image: url('Reloj.png');background-repeat: no-repeat;background-position: bottom right;">
				<div class="panel-heading">Registro de Asistencia</div>
				<div class="panel-body">
					<br>						
						<form role="form" method="post" name="formulario-index" action="/SISTEMA/asistencia/store-asistencia1.php">
							<fieldset>
								<!-- <div class="form-group">
									<label>Cedula</label>
									<input class="form-control" placeholder="Ej: 12345678" name="cedula" type="text" autofocus="">
								</div><br> -->
								<div class="form-group">
									<label>Cedula</label>
									<select name="cedula" id="cedula" class="form-control">
										<?php echo $functions->allCedulas(); ?>
									</select>
								</div><br><br><br>


								
								<div class="form-group">
									<!-- <input type="submit" value="Enviar" class="btn btn-primary"> -->
								</div>								
								

							</fieldset>
							<br>
						</form><br>		<a href="login.php" >Iniciar Sesión</a>			
					
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	

<div id="modalAsistencia" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registro de Asistencia</h4>
      </div>
      <div class="modal-body">
          	  <span for=""> <strong> Codigo:</strong> <i id="codigo"></i> </span>
              &nbsp;<span for=""><strong>Nombre:</strong> <i id="nombre"></i> </span>
              
              <br>
              <table class="table table-striped" id="tableAsistencias" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Fhecha</th>
							<th>Entrada</th>
							<th>Salida</th>
						</tr>
					</thead>
					<tbody>											
						<tr>
							<td id="fecha"></td>
							<td id="entrada"></td>
							<td id="salida"></td>
						</tr>
					</tbody>
				</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="js/select2/js/select2.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		
$("#cedula").select2();
// ========================================================================
//  form edit personal > rules
// ========================================================================

  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='formulario-index']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      cedula : {
        required : true,
        number : true,
      },

    },
    // Specify validation error messages
    messages: {    
     
      cedula : "Selecciona la cedula",
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });

  $("#cedula").change(function(e){
  		//$("#modalAsistencia").modal();
  		if ($("#cedula").val() == '') {
  				return false;
  		} else{
  				$.ajax({
			            url: 'ajax-modal.php',
			            type : 'post',
			            dataType: 'json',
			            data:{ 
			            		cedula : $("#cedula").val(),
			            	 },
			            success:
			                function (data) {
			                	$("#nombre").text(data.nombre);
			                	if (data.codigo == null) {
			                		$("#codigo").text('sin Codigo');
			                	} else{
			                		$("#codigo").text(data.codigo);
			                	};
			                	
			                	$("#entrada").html(data.entryDay);
			                	$("#salida").html(data.exitDay);
			                	$("#fecha").html(data.fecha);
			                    $("#modalAsistencia").modal();

			                }
			      });
  		};
  		
    	
  		
  });

});

	</script>

</body>

</html>