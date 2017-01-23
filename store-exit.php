<?php 

include_once('functions.php');
$functions= new functions();
echo $functions->findExit();
//die();
if ($functions->findExit() == 1) {
	 	$functions->registrarSalida();
} else {
		echo"<script> alert ('debe tener registrada la entrada del dia!');</script>";
		echo"<script> location.href='index.php'</script> ";
}

?>