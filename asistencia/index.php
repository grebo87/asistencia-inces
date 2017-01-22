<?php 
//ini_set('display_errors', '1');
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include '../personal/personal.php';
include 'asistencia.php';
$personal = new personal();
$asistencia = new asistencia();

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
				<h1 class="page-header">Registro de Asistencia del dia <?php echo date('d-m-Y');?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<form role="form" method="post" action="store-asistencia.php">
							<fieldset>
								<div class="row">
        							<div class="col-md-12">
											<table class="datatable table-striped table-bordered" id="tabla-asistencia" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>Codigó</th>
												<th>Cedula</th>
												<th>Nombre</th>
												<th>Entrada</th>
												<th>Salida</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												foreach ($personal->getAll() as $value) {
											?>
											<tr>
												<td><?php echo $value['cod_personal'];?></td>
												<td><?php echo $value['cedula'];?></td>
												<td><?php echo $value['apellido'] .' '. $value['nombre'];?></td>
												<td><?php echo $asistencia->entryDay($value['cedula']);?></td>
												<td><?php echo $asistencia->exitDay($value['cedula']);?></td>
											</tr>

											<?php
												}
											?>
										</tbody>
									</table>
									</div>
								</div><br>
								<div class="form-group">
									<input type="submit" value="Enviar" class="btn btn-primary">
								</div>	
								<div class="row">

									
									
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
    //$('#tabla-asistencia').bootstrapTable();

    $('#tabla-asistencia').DataTable( {
	    
	        "language": {
	          "emptyTable": 'No se encontrarón registros.'
	      }
	} );

});						 
</script>