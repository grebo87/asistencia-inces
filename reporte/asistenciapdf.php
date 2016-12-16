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

                foreach ($datos as $value) { 
                    $html.= '<table class="table table-striped" cellspacing="0" width="50%">
                        <tbody>                     
                            <tr>
                                <td><strong> Fhecha </strong></td><td>'.$value["fecha"].'</td>
                            </tr>
                            <tr>
                                <td><strong> Hora </strong></td><td>'.$value["hora"].'</td>
                            </tr>
                            
                            <tr>
                                <td><strong> Observacio </strong></td><td>'.$value["observacion"].'</td>
                            </tr>                           
                        </tbody>
                    </table><br><br>';
                }
              $html.='   
            </div>
        
        </div><!--/.row-->';
	

$pdf = new Reportes_pdf();
$reporte=$pdf->pdf($titulo = "Listado de ". $_POST['observacion'], $formato = 'A4' , $orientacion = 'L' , $html, $archivo = "Reporte_".$_POST['observacion']);

?>