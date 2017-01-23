<?php 
//ini_set('display_errors', '1');
include_once('functions.php');
$functions= new functions();
if ($functions->findEntry() == 0) {
	 	$functions->regitarEntrada();
} else {
		echo"<script> alert ('ya tiene registrada su entra  del dia!');</script>";
		echo"<script> location.href='index.php'</script> ";
}

?>