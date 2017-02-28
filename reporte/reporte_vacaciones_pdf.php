<?php 
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('../vacaciones/vacaciones.php');
$vacaciones= new vacaciones();
$personal = $vacaciones->getPersonal($_GET['cedula']);
$datos = $vacaciones->all($_GET['cedula'],$_GET['estado']);

  $html ='';
    require_once("Reportes_pdf.php");
    date_default_timezone_set('America/Caracas');

$html.='
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


    </style>

</head>
<body>
<div class="encabezado">
    <img src="../Imagenes_Sistema/inces.png">
</div>
<div class="titulo">
    <h2>Reporte de Vacaciones</h2> 
</div><br>';

$html.='

<div class="row">
			<div class="col-xs-8 col-md-8 col-lg-8">
			
			<br><br>
				<table class="table table-striped" cellspacing="0" width="100%">
					<tbody>
						<tr>
							<td><strong> Nombre </strong></td><td>'.$personal["apellido"].' '.$personal["nombre"].'</td>
						</tr>
						<tr>
							<td><strong> Cedula </strong></td><td>'.$personal["cedula"].'</td>
						</tr>
						<tr>
							<td><strong> Codgo Personal </strong></td><td>'.$personal["cod_personal"].'</td>
						</tr>
						
						
					</tbody>
				</table><br><br>';

					if ($datos != 0) {
						foreach ($datos as $value) { 
					$html.='<table cellspacing="0" cellpadding="1" border="1">
						<tbody>						
							<tr>
								<td><strong> Fecha de Inicio </strong></td><td>'.$value["inicio"].'</td>
							</tr>
							<tr>
								<td><strong> Fecha de Fin </strong></td><td>'.$value["fin"].'</td>
							</tr>
							<tr>
								<td><strong> Estado </strong></td><td>'. $value["estado"].'</td>
							</tr>
							
							<tr>
								<td><strong> Observacion </strong></td><td>'.$value['observacion'].'</td>
							</tr>							
						</tbody>
					</table>';
				 } 
					} else { 
						$html.='<table cellspacing="0" cellpadding="1" border="1">
						<tbody>						
							<tr>
								<td>no hay registros</td>
							</tr>
														
						</tbody>
					</table>';
					}
					
					
	$html.='		</div>
		
		</div><!--/.row-->
		</body>
</html>';


$pdf = new Reportes_pdf();
$reporte=$pdf->pdf($titulo = "Reporte de Vacaciones", $formato = 'A4' , $orientacion = 'P' , $html, $archivo = "Reporte_de_vacaciones");
?>	