<?php 
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('personal.php');
$personal= new personal();
$personals = $personal->getAll();

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
				<h1 class="page-header">Lista de Personal</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
			<a href="cerate-personal.php" class="btn btn-primary">Agregar <span class="glyphicon glyphicon-plus-sign"></span></a>
				<br><br>
				<table id="tablePersonal" class="display" cellspacing="0" width="100%">
						    <thead>
								    <tr>
								        <th>Nombre</th>
								        <th>Cedula</th>
								        <th>Codigo Personal</th>
								        <th></th>
								    </tr>
						    </thead>
						    <tbody>
						    <?php foreach ($personals as $value) { ?>
						    		<tr>
						    			<td> <?php echo $value['apellido'];?> <?php echo $value['nombre'];?></td>
						    			<td><?php echo $value['cedula'];?></td>
						    			<td><?php echo $value['cod_personal'];?></td>
<<<<<<< HEAD
						    			<td><a href="edit-personal.php?id=<?php echo $value['cedula'];?>" class='btn btn-primary'><span class="glyphicon glyphicon-edit"></span></a> <a href="delete-personal.php?id=<?php echo $value['cedula'];?>" class='btn btn-danger' onclick="if(confirm('&iquest;Esta seguro que desea eliminar a esta persona?')) return true;  else return false;"><span class="glyphicon glyphicon-trash"></span></a> </td>
=======
						    			<td><a href="show-personal.php?id=<?php echo $value['cedula'];?>" class='btn btn-success'><span class="glyphicon glyphicon-eye-open"></span></a> <a href="edit-personal.php?id=<?php echo $value['cedula'];?>" class='btn btn-primary'><span class="glyphicon glyphicon-edit"></span></a> <a href="delete-personal.php?id=<?php echo $value['cedula'];?>" class='btn btn-danger' onclick="if(confirm('&iquest;Esta seguro que desea eliminar a esta persona?')) return true;  else return false;"><span class="glyphicon glyphicon-trash"></span></a> </td>
>>>>>>> d0d3f847a17b5e40991960670716730cea2597a8
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
    $('#tablePersonal').DataTable( {
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