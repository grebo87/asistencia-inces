<?php 
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('usuario.php');
$usuario= new usuario();
$usuarios = $usuario->getAll();

include '../layouts/head.php';
include '../layouts/nav.php';
include '../layouts/sidebar.php';
?>		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<!-- breadcrumb  -->
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Usarios</li>
			</ol>
		</div><!--/.row-->

		<!-- Tituo de la pagina  -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Lista de Usuarios</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
			<a href="cerate-usuario.php" class="btn btn-primary">Agregar <span class="glyphicon glyphicon-plus-sign"></span></a>
				<br><br>
				<table id="tableUsuarios" class="display" cellspacing="0" width="100%">
						    <thead>
								    <tr>
								        <th>Nombre</th>
								        <th>Login</th>
								        <th>Tipo</th>
								        <th>Estado</th>
								        <th></th>
								    </tr>
						    </thead>
						    <tbody>
						    <?php foreach ($usuarios as $value) { ?>
						    		<tr>
						    			<td> <?php echo $value['apellido'];?> <?php echo $value['nombre'];?></td>
						    			<td><?php echo $value['login'];?></td>
						    			<td><?php echo ($value['tipo'] == '1')? 'Administrador' : 'Usuario' ; ?></td>
						    			<td><?php echo ($value['estatus'] == '1')? 'Activo' : 'Inactivo' ; ?></td>
						    			<td><a href="edit-usuario.php?id=<?php echo $value['id'];?>" class='btn btn-primary'><span class="glyphicon glyphicon-edit"></span></a> <a href="delete-usuario.php?id=<?php echo $value['id'];?>" class='btn btn-danger' onclick="if(confirm('&iquest;Esta seguro que desea eliminar a este usuario?')) return true;  else return false;"><span class="glyphicon glyphicon-trash"></span></a> </td>
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
    $('#tableUsuarios').DataTable( {
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