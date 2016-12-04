
<?php
session_start();
include_once('../conectar.php');
class usuario {
	
		private $cedula;
		private $login;
		private $contrasena;	
		private $tipo;
		private $estatus;
	    private $conectar;
	




		public function __construct($cedula,$login,$contrasena,$tipo,$estatus)
		{

		$this->cedula=$cedula;
		$this->login=$login;
		$this->contrasena=$contrasena;
		$this->tipo=$tipo;
		$this->estatus=$estatus;
		$this->conectar = new conectar();

	
			
		}

	/**
	* Store a new Usuario.
	*
	*/	
	public function registrarUsuario()	{
				
		$sql="INSERT INTO usuario(cedula_personal,login,contrasena,tipo,estatus) VALUES ('$this->cedula','$this->login','$this->contrasena','$this->tipo','$this->estatus')";

		$result= pg_query($this->conectar->con(),$sql);

		if(!$result){
			echo"<script> alert ('Uno de sus datos no han sido correctos ¡Vuelva a Intentarlo!');</script>";
			echo"<script> location.href='registro-usuario.php';</script> ";
		}else{
			$fecha=date('d-m-Y');
	 		$actividad =date('h:i:s').'</br>Registro un Usuario  ';
			$cedula1=$_SESSION['id'];
			$sql1="INSERT INTO actividad(fecha,actividad,cedula) VALUES ('$fecha','$actividad','$cedula1')";
			$result1= pg_query($this->conectar->con(),$sql1);
			//var_dump($sql1, $_SESSION['id']);
			echo"<script> alert ('datos guardados!');</script>";
			echo"<script> location.href='registro-usuario.php';</script> ";

		}
		
	}// Fin registrar_usuario()



	/**
	* buscar all Personal.
	*
	*/	
	public function buscarPersonal() {

		$sql="SELECT * FROM personal";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);
		$option = "<option  value='' ></option>";

		if($encontrados>0){ 


			while($datos=pg_fetch_array($result)) {
				$option.= "<option  value='".$datos['cedula']."' >".$datos['cedula']."</option>";
			}
		
		}else{

			$option.= "<option  value='' ></option>";
		}

		return $option;

	}// fin buscar()


	/**
	* buscar a un Personal.
	*
	*/	
	public function consultarUsuario($cedula) {

		$conectar = new conectar();
		$sql="SELECT * FROM personal,usuario WHERE personal.cedula='$cedula' and usuario.cedula_personal='$cedula'";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if($encontrados>0){ 
			echo "<thead><tr>
    		<th>Nombre</th>
			<th>Apellido</th>
			<th>Cedula</th>
			<th>Usuario</th>
			<th>Tipo</th>
			<th>Estado</th>
    	</tr></thead><tbody>";
			while($datos=pg_fetch_array($result)) {
					echo "<tr>
							<td>".$datos['nombre']."</td>
							<td>".$datos['apellido']."</td>
							<td>".$datos['cedula']."</td>
							<td>".$datos['login']."</td><td>";

						echo ($datos['tipo'] == 1)? 'Administrador': 'Usuario';
						echo "</td><td>";
						echo ($datos['estatus'] == 1)? 'Activo': 'Inactivo';
						echo "</td></tr>";
					
			}
			echo "</tbody>";
		} else {
			echo '<center><h3>No se ha encontrado al Usuario!</h3><br/><a href="/SISTEMA/usuario/consultar-usuario.php">Intente nuevamente</a></center>';
		}
		
		return $busca;

	}//fin busca()


	/**
	* modifica a un Personal.
	*
	*/
	public function modificar($cedula){

		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$cedula=$_POST['cedula'];
		$correo=$_POST['correo'];
		$cargo=$_POST['cargo'];
		$fecha_n=$_POST['fecha_n'];
		$estatus=$_POST['estatus'];
			
		$sql=" UPDATE personal set nombre='$nombre',apellido='$apellido',correo='$correo',cargo='$cargo',fecha_n='$fecha_n',estatus='$estatus' where cedula='$cedula'";

		$result= pg_query($this->conectar->con(),$sql);	

		if(!$result){
				echo"<script> alert ('Datos no Modificado ¡Vuelva a Intentarlo!');</script>";
				echo"<script> location.href='/SISTEMA/Gestionar_Personal/Editar_personal/Editar_Personal.php';</script> ";
			
			}else{
				echo"<script> alert ('Datos  Modificado!');</script>";
				echo"<script> location.href='/SISTEMA/Gestionar_Personal/Editar_personal/Editar_Personal.php';</script> ";
		}	
	}//fin modificar()



	/**
	* para loguear  a un Usuario.
	*
	*/	

	public function logueo($login,$contrasena){


			$sql="SELECT * FROM usuario WHERE login='$login' and contrasena='$contrasena' and estatus='1'";
			$result=pg_query($this->conectar->con(),$sql);
			$encontrados=pg_num_rows($result);

			if($encontrados > 0)
			{
				$datos=pg_fetch_array($result);
				session_start();
				$_SESSION['id']=$datos['id'];

				echo"<script> alert ('Bienvenido!');</script>";
				echo"<script> location.href='/SISTEMA/Inicio/Inicio.php';</script> ";
			}else{
				echo"<script> alert ('Uno de sus datos no han sido correctos ¡Vuelva a Intentarlo!');</script>";
				echo"<script> location.href='/SISTEMA/Inicio_De_Sesion/Formulario_Inicio_Sesion.php';</script> ";
			}

	} //fin logueo()






}

?>
