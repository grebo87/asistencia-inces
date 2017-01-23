<?php
ini_set('display_errors', '1');
include 'functions.php';
$functions = new functions();

$cedula = $_POST['cedula'];

$entryDay =  $functions->entryDay($cedula);

$exitDay =  $functions->exitDay($cedula);

$personal = $functions->getPersonal($cedula);

echo json_encode([
					'entryDay' => $entryDay,
					'exitDay'  => $exitDay,
					'nombre'   => $personal['apellido'] .' ' . $personal['nombre'],
					'codigo'   => $personal['cod_personal'],
					'fecha'    => date('d-m-Y'),

	]);


?>