<?php 

include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('asistencia.php');
$asistencia= new asistencia();
$personal = $asistencia->getPersonal($_POST['cedula']);
$datos = $asistencia->allInasistencia($_POST['cedula']);
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
				<h1 class="page-header">Datos de Inasistencia</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-8 col-md-8 col-lg-8">
			<a href="find-inasistencia.php" class="btn btn-default">Regresar</a>
			<br><br>
				<table class="table table-striped" cellspacing="0" width="50%">
					<tbody>
						<tr>
							<td><strong> Nombre </strong></td><td><?php echo $personal['apellido'];?> <?php echo $personal['nombre'];?> </td>
						</tr>
						<tr>
							<td><strong> Cedula </strong></td><td><?php echo $personal['cedula'];?></td>
						</tr>
						<tr>
							<td><strong> Codgo Personal </strong></td><td><?php echo $personal['cod_personal'];?></td>
						</tr>
						
						
					</tbody>
				</table><br><br>
				<table class="table table-striped" id="tableInasistencias" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Fhecha</th>
							<th>Hora</th>
						</tr>
					</thead>
					<tbody>	
				<?php foreach ($datos as $value) { ?>
										
							<tr>
								<td><?php echo $value['fecha'];?></td><td><?php echo $value['hora'];?></td>
							</tr>
							
						
				<?php } ?>
					</tbody>
				</table><br><br>
			</div>
		
		</div><!--/.row-->
		
		
		
	</div>	<!--/.main-->

<?php include '../layouts/footer.php'; ?>	

<script>
	$(document).ready(function(){
    $('#tableInasistencias').DataTable( {
        "language": {
            "lengthMenu": "ver _MENU_ registros por pagina",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
    } );
});						 
</script>