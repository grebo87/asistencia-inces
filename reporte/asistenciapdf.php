<?php
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

  $html ='';
    require_once("Reportes_pdf.php");
    date_default_timezone_set('America/Caracas');
$html.='

<style>
   
    table.first {
        color: #003300;
        font-family: helvetica;
        font-size: 8pt;
        border-left: 3px solid red;
        border-right: 3px solid #FF00FF;
        border-top: 3px solid green;
        border-bottom: 3px solid blue;
        background-color: #ccffcc;
    }
    td {
        border: 2px solid blue;
        background-color: #ffffee;
    }
    td.second {
        border: 2px dashed green;
    }
    div.test {
        color: #CC0000;
        background-color: #FFFF66;
        font-family: helvetica;
        font-size: 10pt;
        border-style: solid solid solid solid;
        border-width: 2px 2px 2px 2px;
        border-color: green #FF00FF blue red;
        text-align: center;
    }
    
</style>
        <!-- Tituo de la pagina  -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Reporte de '.$_POST["observacion"].'</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-xs-8 col-md-8 col-lg-8">
            <br>
                <h4>Datos del Personal</h4>
                <table class="table table-striped" cellspacing="0" width="50%">
                    <tbody>
                        <tr>
                            <td><strong> Nombre </strong></td><td>'.$personal["apellido"].'  '.$personal["nombre"].' </td>
                        </tr>
                        <tr>
                            <td><strong> Cedula </strong></td><td>'.$personal["cedula"].'</td>
                        </tr>
                        <tr>
                            <td><strong> Codgo Personal </strong></td><td>'.$personal["cod_personal"].'</td>
                        </tr>
                        
                        
                    </tbody>
                </table><br><br>
                    <h4>'.$_POST["observacion"].' Desde  '.$_POST["desde"].' Hasta '.$_POST["hasta"].'</h4>';
                    $html.='<table class="table table-striped" cellspacing="0" width="80%">
                        <thead>
                            <tr>
                                <th>Fhecha</th>
                                <th>Hora</th>
                                <th>entrada</th>
                                <th>salida</th>
                            </tr>
                        </thead>
                        <tbody> ';

                foreach ($datos as $value) { 
                    $html.= '                    
                            <tr>
                                <td>'.$value["fecha"].'</td>
                                <td>'.$value["hora"].'</td>';
                            if ($value['entrada'] == 1) {
                                $html.='<td><span class="glyphicon glyphicon-ok"></span></td>';
                            } else {
                                $html.='<td><span class="glyphicon glyphicon-remove"></span></td>';
                            }

                            if ($value['salida'] == 1) {
                                $html.='<td><span class="glyphicon glyphicon-ok"></span></td>';
                            } else {
                                $html.='<td><span class="glyphicon glyphicon-remove"></span></td>';
                            }                         
                        $html.='</tr>';
                }
              $html.='
              </tbody>
                </table>   
            </div>
        
        </div><!--/.row-->';
	

$pdf = new Reportes_pdf();
$reporte=$pdf->pdf($titulo = "Listado de ". $_POST['observacion'], $formato = 'A4' , $orientacion = 'L' , $html, $archivo = "Reporte_".$_POST['observacion']);

?>