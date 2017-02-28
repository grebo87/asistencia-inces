<?php
session_start();
include_once('../conectar.php');
/**
* claese para gestionar la seguridad del sistema
*/
class seguridad 
{
	
	private $conectar;

	
	function __construct()
	{
		$this->conectar = new conectar();

	}


	/**
	* metodo o funcion para entrar al sistema
	*/
	public function logueo($login = '', $contrasena = '')
	{
		$sql="SELECT * FROM usuario WHERE login='$login' and contrasena='$contrasena' and estatus='1'";
			$result=pg_query($this->conectar->con(),$sql);
			$encontrados=pg_num_rows($result);

			if($encontrados > 0)
			{
				$datos=pg_fetch_array($result);
				session_start();
				$_SESSION['id']=$datos['id'];
				$_SESSION['tipoUsuario'] = $datos['tipo'];

				echo"<script> alert ('Bienvenido!');</script>";
				echo"<script> location.href='/SISTEMA/inicio/inicio.php';</script> ";
			}else{
				echo"<script> alert ('Uno de sus datos no han sido correctos ¡Vuelva a Intentarlo!');</script>";
				echo"<script> location.href='/SISTEMA/login.php';</script> ";
			}
	}


	/**
	* metodo o funcion para verificar si hay una sesion activa
	*/
	public function verificaSesion()
	{
        if ( $_SESSION['id'] ) {
          
        	header("location:../inicio/inicio.php");
		} else {
           session_unset();
           header("location:../login.php");
         }
	}

	/**
	* metodo o funcion para verificar si hay una sesion activa
	*/
	public function verificaSesion1()
	{
        if ( $_SESSION['id'] ) {
          
        	
		} else {
           session_unset();
           header("location:../login.php");
         }
	}

	public function logout()
	{
		session_unset();
        session_destroy();  
        header("location:../login.php");
	}
}


?>