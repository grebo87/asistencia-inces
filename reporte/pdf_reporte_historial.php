<?php 
// ini_set('display_errors', '1');
include_once('../seguridad/seguridad.php');
$seguridad= new seguridad();
$seguridad->verificaSesion1();
include_once('reporte.php');
$reporte= new reporte();
$personal = $reporte->getPersonal($_GET['cedula']);
$datos = $reporte->allHistoria($_GET['cedula']);

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
    <h2>Reporte Historial de Usuario</h2> 
</div><br>		

			<br><br>
				<table cellspacing="0" cellpadding="1" border="0">
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
				</table><br><br>
				<table cellspacing="0" cellpadding="1" border="1">
					<thead>
						<tr>
							<th><strong>Fecha</strong></th>
							<th><strong>Actividad</strong></th>
						</tr>
					</thead>
					<tbody>';
				foreach ($datos as $value) {						

							$html.='<tr>
								<td>'.$value["fecha"].'</td>
								<td>'.$value["actividad"].'</td>
							</tr>';			
				}

				$html.='</tbody>
				</table>
							</body>
</html>';

$pdf = new Reportes_pdf();
$reporte=$pdf->pdf($titulo = "Reporte de Usuario", $formato = 'A4' , $orientacion = 'P' , $html, $archivo = "Reporte_de_usuario");

?>

