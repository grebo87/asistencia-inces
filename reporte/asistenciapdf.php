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
    <h2>Reporte de '.$_POST["observacion"].' Desde '. date("d-m-Y", strtotime($_POST["desde"])).' Hasta '. date("d-m-Y", strtotime($_POST["hasta"])).'</h2> 
</div><br>
<div class="datos-persoales">
    <h4>Datos del Personal</h4>

                <table cellspacing="0" cellpadding="1" border="1">
                    <tbody>
                        <tr>
                            <td><strong> Nombre </strong></td><td>'.$personal['apellido'].' '.$personal['nombre'].'</td>
                        </tr>
                        <tr>
                            <td><strong> Cedula </strong></td><td>'.$personal['cedula'].'</td>
                        </tr>
                        <tr>
                            <td><strong> Codgo Personal </strong></td><td>'.$personal['cod_personal'].'</td>
                        </tr>
                        
                        
                    </tbody>
                </table>
</div><br><br><br><br>
<div class="tabla-result" style="text-align: center;">
<table cellspacing="0" cellpadding="1" border="1" style="text-align: center;">
                    <thead>
                        <tr>
                            <th><strong>Fecha </strong></th>
                            <th><strong>Entrada</strong> </th>
                            <th><strong>Salida </strong></th>
                        </tr>
                    <thead>

                    <tbody>';

                foreach ($datos as $value) { 
                    $showEntrada = ( !is_null($value['entrada'] ) ) ? date('h:i:s a', strtotime($value['entrada']))  : '<span>X</span>';
                    $showSalida = ( !is_null($value['salida'] ) ) ? date('h:i:s a', strtotime($value['salida']))   : '<span>X</span>';
                    $html.= '                    
                            <tr>
                                <td>'.date('d-m-Y', strtotime($value['fecha'])).'</td>';
                            $html.= '<td>'.$showEntrada.'</td> ';
                            $html.= '<td>'.$showSalida.' </td>';                      
                    $html.='</tr>';
                }
              $html.='
               </tbody>
                </table>
              </div>
</body>
</html>';
  

$pdf = new Reportes_pdf();
$reporte=$pdf->pdf($titulo = "Listado de ". $_POST['observacion'], $formato = 'A4' , $orientacion = 'P' , $html, $archivo = "Reporte_".$_POST['observacion']);

?>