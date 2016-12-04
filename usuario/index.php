<?php 
        session_start();
        if ( $_SESSION['id'] ) {
          
        	header("location:../usuario/registro-usuario.php");
} else {
           session_unset();
           header("location:../index.html");
         }
          
?>