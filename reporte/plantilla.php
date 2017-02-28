<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	.encabezado{
		text-align: center;
	}
	.titulo{
		text-align: center;
	}
	.datos-persoales{
		text-align: center;
	}
	.tabla-result{
		text-align: center;
	}

body {
    margin: 0;
    padding: 0;
    font: 12px/15px "Helvetica Neue",Arial, Helvetica, sans-serif;
    color: #555;
    background: #f5f5f5;
}
a {
    color: #666;
}
#content {
    width: 65%;
    max-width: 690px;
    margin: 6% auto 0;}

table {
    overflow: hidden;
    border: 1px solid #d3d3d3;
    background: #fefefe;
    width: 70%;
    margin: 0 auto 0;
    border-radius:5px;
    box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
}
th, td {padding:18px 28px 18px; text-align:center; }
th {padding-top:22px; text-shadow: 1px 1px 1px #fff; background:#e8eaeb;}
td {border-top:1px solid #e0e0e0; border-right:1px solid #e0e0e0;}
tr.odd-row td {background:#f6f6f6;}
td.first, th.first {text-align:left}
td.last {border-right:none;}

td {
    background: -moz-linear-gradient(100% 25% 90deg, #fefefe, #f9f9f9);
    background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f9f9f9), to(#fefefe));
}
tr.odd-row td {
    background: -moz-linear-gradient(100% 25% 90deg, #f6f6f6, #f1f1f1);
    background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f1f1f1), to(#f6f6f6));
}
th {
    background: -moz-linear-gradient(100% 20% 90deg, #e8eaeb, #ededed);
    background: -webkit-gradient(linear, 0% 0%, 0% 20%, from(#ededed), to(#e8eaeb));
}
tr:first-child th.first {
    -moz-border-radius-topleft:5px;
    -webkit-border-top-left-radius:5px; /* Saf3-4 */
}
tr:first-child th.last {
    -moz-border-radius-topright:5px;
    -webkit-border-top-right-radius:5px; /* Saf3-4 */
}
tr:last-child td.first {
    -moz-border-radius-bottomleft:5px;
    -webkit-border-bottom-left-radius:5px; /* Saf3-4 */
}
tr:last-child td.last {
    -moz-border-radius-bottomright:5px;
    -webkit-border-bottom-right-radius:5px; /* Saf3-4 */
}
	</style>

</head>
<body>
<div class="encabezado">
	<img src="../Imagenes_Sistema/inces.png">
</div>
<div class="titulo">
	<h2>titulo</h2>	
</div><br>
<div class="datos-persoales">
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
				</table>
</div>
<div class="tabla-result">
	<h4><?php echo $_POST['observacion'];?> Desde <?php echo date('d-m-Y', strtotime($_POST['desde']));?> Hasta <?php echo date('d-m-Y', strtotime($_POST['hasta']));?></h4>
					<?php 
						if ($_POST['observacion'] == 'Asistencia') {
							include 'table-asistencia.php';
						}else{
							include 'tableinasistencia.php';
						}
					?>

</div>
</body>
</html>