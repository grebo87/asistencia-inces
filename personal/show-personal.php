<?php 

include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('personal.php');
$personal= new personal();
<<<<<<< HEAD
$persona = $personal->get($_GET['cedula']);
=======
$persona = $personal->get($_GET['id']);
>>>>>>> d0d3f847a17b5e40991960670716730cea2597a8
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
				<h1 class="page-header">Datos de la Persona</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-8 col-md-8 col-lg-8">
			<a href="index.php" class="btn btn-default">Regresar</a>
			<br><br>
				<table class="table table-striped" cellspacing="0" width="50%">
					<tbody>
						<tr>
							<td><strong> Nombre </strong></td><td><?php echo $persona['apellido'];?> <?php echo $persona['nombre'];?> </td>
						</tr>
						<tr>
							<td><strong> Cedula </strong></td><td><?php echo $persona['cedula'];?></td>
						</tr>
						<tr>
							<td><strong> Fecha de Nacimiento </strong></td><td><?php echo $persona['fecha_n'];?></td>
						</tr>
						<tr>
							<td><strong> Codgo Personal </strong></td><td><?php echo $persona['cod_personal'];?></td>
						</tr>
						<tr>
							<td><strong> Correo </strong></td><td><?php echo $persona['correo'];?></td>
						</tr>
						<tr>
							<td><strong> Cargo </strong></td><td><?php echo $persona['cargo'];?></td>
						</tr>
						<tr>
							<td><strong> Estatus </strong></td><td><?php echo $persona['status'];?></td>
						</tr>
						
					</tbody>
				</table>
			</div>
		
		</div><!--/.row-->
		
		
		
	</div>	<!--/.main-->

<?php include '../layouts/footer.php'; ?>	
