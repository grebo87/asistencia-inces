<?php 

include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('permiso.php');
$permiso= new permiso();
$personal = $permiso->getPersonal($_POST['cedula']);
$datos = $permiso->all($_POST['cedula']);
include '../layouts/head.php';
include '../layouts/nav.php';
include '../layouts/sidebar.php';
?>		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<!-- breadcrumb  -->
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Reporte / Permisos</li>
			</ol>
		</div><!--/.row-->

		<!-- Tituo de la pagina  -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Datos del Permiso</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-8 col-md-8 col-lg-8">
			<a href="find-permiso.php" class="btn btn-default">Regresar</a>
			&nbsp; &nbsp; <a href="../reporte/reporte_permiso_pdf.php?cedula=<?php echo $personal['cedula'];?>" class="btn btn-primary">Descargar</a>
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

				<?php foreach ($datos as $value) { ?>
					<table class="table table-striped" cellspacing="0" width="50%">
						<tbody>	
							<tr>
								<td><strong> Tipo </strong></td><td><?php echo $value['tipo'];?></td>
							</tr>
							<tr>
								<td><strong> Motivo </strong></td><td><?php echo $value['motivo'];?></td>
							</tr>						
							<tr>
								<td><strong> Fhecha de Inicio </strong></td><td><?php echo $value['inicio'];?></td>
							</tr>
							<tr>
								<td><strong> Fecha de Fin </strong></td><td><?php echo $value['fin'];?></td>
							</tr>						
							<tr>
								<td><strong> Observacio </strong></td><td><?php echo $value['observacion'];?></td>
							</tr>
													
						</tbody>
					</table>
				<?php } ?>
			</div>
		
		</div><!--/.row-->
		
		
		
	</div>	<!--/.main-->

<?php include '../layouts/footer.php'; ?>	
