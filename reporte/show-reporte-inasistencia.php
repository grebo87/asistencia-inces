<?php 
//ini_set('display_errors', '1');
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('reporte.php');
$reporte= new reporte();
$personal = $reporte->getPersonal($_POST['cedula']);

if ($_POST['observacion'] == 'Inasistencia') {
	$datos = $reporte->all($_POST['cedula'],$_POST['observacion'],$_POST['desde'],$_POST['hasta'],$_POST['observacion1']);
}else{
	$datos = $reporte->asistencia($_POST['cedula'],$_POST['observacion'],$_POST['desde'],$_POST['hasta']);
}

include '../layouts/head.php';
include '../layouts/nav.php';
include '../layouts/sidebar.php';
?>		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<!-- breadcrumb  -->
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Reporte</li>
			</ol>
		</div><!--/.row-->

		<!-- Tituo de la pagina  -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Reporte de <?php echo $_POST['observacion'];?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-8 col-md-8 col-lg-8">
			
			<form method="post" action="asistenciapdf.php">
				<input type="hidden" name="cedula" value="<?php echo $_POST['cedula'];?>" >
				<input type="hidden" name="observacion" value="<?php echo $_POST['observacion'];?>" >
				<input type="hidden" name="desde" value="<?php echo $_POST['desde'];?>" >
				<input type="hidden" name="hasta" value="<?php echo $_POST['hasta'];?>" >
				<input type="hidden" name="observacion1" value="<?php echo $_POST['observacion1'];?>" >
				<a href="generar-reporte.php" class="btn btn-default">Regresar</a>
				<input type="submit" value="Descargar" class="btn btn-primary" >
				
			</form> 
			<br><br>
				<h4>Datos del Personal</h4>

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
					<h4><?php echo $_POST['observacion'];?> Desde <?php echo date('d-m-Y', strtotime($_POST['desde']));?> Hasta <?php echo date('d-m-Y', strtotime($_POST['hasta']));?></h4>
					<?php 
						if ($_POST['observacion'] == 'Asistencia') {
							include 'table-asistencia.php';
						}else{
							include 'tableinasistencia.php';
						}
					?>
					
			</div>
		
		</div><!--/.row-->
		
		
		
	</div>	<!--/.main-->

	

<?php include '../layouts/footer.php'; ?>	


<script>
	$(document).ready(function(){
    

    $("#decargarpdf").click(function() {
    	
    	 $.ajax({
            url: 'asistenciapdf.php',
            type : 'post',
            data:{ cedula :" <?php echo $_POST['cedula'];?>",observacion : "<?php echo $_POST['observacion'];?>",desde : "<?php echo $_POST['desde'];?>",hasta : "<?php echo $_POST['hasta'];?>",observacion1 : "<?php echo $_POST['observacion1'];?>"  },
            success:
                function (data) {
                    //console.log(data);

                }
            });
    	
    	
    });
});						 
</script>