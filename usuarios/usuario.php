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


	public function getAll()
	{
		$sql="select * from personal inner join usuario on personal.cedula=usuario.cedula_personal";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return pg_fetch_all($result);
		}else{
			return 0;
		}
	}

	public function get($id)
	{
		$sql="select * from personal inner join usuario on personal.cedula=usuario.cedula_personal where usuario.id='$id'";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return pg_fetch_array($result);
		}else{
			return 0;
		}
	}

	public function allPersonal()
	{
		$sql="select personal.cedula from personal";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);
		$option="<option value=''>Seleccione</option>";
		if ($encontrados > 0) {
			foreach (pg_fetch_all($result) as $value) {
				$option.="<option value='".$value['cedula']."'>".$value['cedula']."</option>";
			}
			return $option;
		}else{
			return 0;
		}
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
			echo"<script> location.href='create-usuario.php';</script> ";
		}else{
			$fecha=date('d-m-Y');
	 		$actividad =date('h:i:s').'</br>Registro un Usuario  ';
			$cedula1=$_SESSION['id'];
			$sql1="INSERT INTO actividad(fecha,actividad,cedula) VALUES ('$fecha','$actividad','$cedula1')";
			$result1= pg_query($this->conectar->con(),$sql1);
			//var_dump($sql1, $_SESSION['id']);
			echo"<script> alert ('datos guardados!');</script>";
			echo"<script> location.href='index.php';</script> ";

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
	* modifica a un Usuario.
	*
	*/
	public function updateUsuario($cedula,$tipo,$estatus,$id){

		$sql=" UPDATE usuario set tipo='$tipo',estatus='$estatus' where cedula_personal='$cedula'";

		$result= pg_query($this->conectar->con(),$sql);	

		if(!$result){
				echo"<script> alert ('Datos no Modificado ¡Vuelva a Intentarlo!');</script>";
				echo"<script> location.href='edit-usuario.php?id=".$id."';</script> ";
			
			}else{
				echo"<script> alert ('Datos  Modificado!');</script>";
				echo"<script> location.href='index.php';</script> ";
		}	
	}//fin modificar()


	public function deleteUsuario($id='')
	{
		$sql="delete FROM usuario WHERE id='$id'";
		$result=pg_query($this->conectar->con(), $sql);
	

		if (pg_affected_rows($result) == 1) {
				echo"<script> alert ('Datos Eliminados');</script>";
				echo"<script> location.href='index.php';</script> ";
		}else{
				echo"<script> alert ('Datos no Eliminados');</script>";
				echo"<script> location.href='index.php';</script> ";
		}
	}


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

	public function findUsuario($cedula='')
	{
		$sql="SELECT * FROM personal,usuario WHERE personal.cedula='$cedula' and usuario.cedula_personal='$cedula'";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
				return pg_fetch_array($result);
		}else{
			return 0;
		}
	}




}

?>
