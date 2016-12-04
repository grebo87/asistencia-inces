
<?php
session_start();
include_once('../../conectar.php');
class usuario {
	
		private $nombre;
		private $apellido;
		private $cedula;
		private $cod_personal;
		private $correo;
		private $cargo;
		private $fecha_n;
	    private $estatus;
	    private $conectar;
	




		public function __construct($nombre,$apellido,$cedula,$correo,$cargo,$fecha_n,$estatus,$cod_personal)
		{

		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->cedula=$cedula;
		$this->correo=$correo;
		$this->cargo=$cargo;
		$this->fecha_n=$fecha_n;
		$this->estatus=$estatus;
		$this->cod_personal = $cod_personal; 
		$this->conectar = new conectar();

	
			
		}

	/**
	* Store a new Personal.
	*
	*/	
	public function registrar_usuario()	{
				
		$sql="INSERT INTO personal(nombre,apellido,cedula,correo,cargo,fecha_n,status,cod_personal) VALUES ('$this->nombre','$this->apellido','$this->cedula','$this->correo','$this->cargo','$this->fecha_n','$this->estatus','$this->cod_personal')";

		$result= pg_query($this->conectar->con(),$sql);

		if(!$result){
			echo"<script> alert ('Uno de sus datos no han sido correctos ¡Vuelva a Intentarlo!');</script>";
			echo"<script> location.href='RegUser.php';</script> ";
		}else{
			$fecha=date('d-m-Y');
	 		$actividad =date('h:i:s').'</br>registro un personal  ';
			$cedula1=$_SESSION['id'];
			$sql1="INSERT INTO actividad(fecha,actividad,cedula) VALUES ('$fecha','$actividad','$cedula1')";
			$result1= pg_query($this->conectar->con(),$sql1);
			//var_dump($sql1, $_SESSION['id']);
			echo"<script> alert ('datos guardados!');</script>";
			echo"<script> location.href='RegUser.php';</script> ";

		}
		
	}// Fin registrar_usuario()



	/**
	* buscar a un Personal.
	*
	*/	
	public function buscar($cedula) {

		$sql="SELECT * FROM personal WHERE cedula='$cedula'";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if($encontrados>0){ 

			echo'<div id="Contacto"><h1>Datos Personales </h1>';

			while($datos=pg_fetch_array($result)) {
				echo '<table  border="3">';
				echo  '
					<tr><th id="encatabla">Nombre </th>
					<th id="encatabla">Apellido </th>
					<th id="encatabla">Cedula </th>
					<th id="encatabla">Fecha de nacimiento </th>
					<th id="encatabla">correo </th></tr>

					<tr><td>'.$datos['nombre'].'</td>
					<td>'.$datos['apellido'].'</td>
					<td>'.$datos['cedula'].'</td>
					<td>'.$datos['fecha_n'].'</td>
					<td>'.$datos['correo'].'</td></tr>';
			}
			echo '</table>';
		
		}else{
			$fecha=date('d-m-Y');
 			$actividad =date('h:i:s').'</br>busco un dato personal  ';
 			$cedula=$_SESSION['id'];

 			$sql1="INSERT INTO actividad(fecha,actividad,cedula) VALUES ('$fecha','$actividad','$cedula')";

			$result1= pg_query($this->conectar->con(),$sql1);

			echo '<center><h3>No se ha encontrado al Docente!</h3><br/><a href="/SISTEMA/Gestionar_Personal/Buscar_Personal/Buscar_Personal.php">Intente nuevamente</a></center>';
		}

		echo" </div> ";
		return $buscar;

	}// fin buscar()


	/**
	* buscar a un Personal.
	*
	*/	
	public function busca($cedula) {

		$conectar = new conectar();
		$sql="SELECT * FROM personal WHERE cedula='$cedula'";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if($encontrados>0){ 

			echo'<div id="Contacto">
			    <h1>Modificar Personales </h1>
			';

			while($datos=pg_fetch_array($result)) {
					echo '<table  >';
					include_once('form-edit-personal.php');
			}
			echo '</table>';
		} else {
			echo '<center><h3>No se ha encontrado al Docente!</h3><br/><a href="/SISTEMA/Gestionar_Personal/Editar_personal/Editar_Personal.php">Intente nuevamente</a></center>';
		}
		echo"
			</div>
			";
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
		$cod_personal = $_POST['cod_personal'];
		$sql=" UPDATE personal set nombre='$nombre',apellido='$apellido',correo='$correo',cargo='$cargo',fecha_n='$fecha_n',status='$estatus', cod_personal = '$cod_personal' where cedula='$cedula'";

		$result= pg_query($this->conectar->con(),$sql);	

		if(!$result){
				echo"<script> alert ('Datos no Modificado ¡Vuelva a Intentarlo!');</script>";
				echo"<script> location.href='/SISTEMA/Gestionar_Personal/Editar_personal/Editar_Personal.php';</script> ";
			
			}else{
				echo"<script> alert ('Datos  Modificado!');</script>";
				echo"<script> location.href='/SISTEMA/Gestionar_Personal/Editar_personal/Editar_Personal.php';</script> ";
		}	
	}//fin modificar()







	public function asistencia()
		{
			include_once('../../conectar.php');
	$conectar = new conectar();


$fecha=date('d-m-Y');
 $hora =date('h:i:s');

$cedula=$_POST['cedula'];
			
$sql="INSERT INTO asitencia(fecha,cedula,hora) VALUES ('$fecha','$cedula','$hora')";

$result= pg_query($conectar->con(),$sql);					



if(!$result)
			{
				echo"<script> alert ('Uno de sus datos no han sido correctos ¡Vuelva a Intentarlo!');</script>";
				echo"<script> location.href='/SISTEMA/Gestionar_Asistencia/Registro_Asistencia/Gestionar_Asistencia.php'</script> ";
			} 

		


			else 
			{ 

				
				
	echo"<script> alert ('datos guardados!');</script>";
	echo"<script> location.href='/SISTEMA/Gestionar_Asistencia/Registro_Asistencia/Gestionar_Asistencia.php'</script> ";
	




	}


	
}

public function asistencia1($cedula = ''){
	include_once('../../conectar.php');
	$conectar = new conectar();


	$fecha=date('d-m-Y');
 	$hora =date('h:i:s');
			
	$sql="INSERT INTO asitencia(fecha,cedula,hora) VALUES ('$fecha','$cedula','$hora')";

	$result= pg_query($conectar->con(),$sql);					



	if(!$result)
			{
				echo"<script> alert ('Uno de sus datos no han sido correctos ¡Vuelva a Intentarlo!');</script>";
				echo"<script> location.href='/SISTEMA/index.html'</script> ";
			} 

			else
			{
				echo"<script> alert ('datos guardados!');</script>";
				echo"<script> location.href='/SISTEMA/index.html'</script> ";
			}
}

	public function inasistencia1($cedula = '', $observacion = ''){

			include_once('../../conectar.php');
			$conectar = new conectar();


			$fecha=date('d-m-Y');
 			$hora =date('h:i:s');
			$sql="INSERT INTO inasitencia(fecha,hora,cedula,observacion) VALUES ('$fecha','$hora','$cedula','$observacion')";

			$result= pg_query($conectar->con(),$sql);					



if(!$result)
			{
				echo"<script> alert ('Uno de  datos no han sido correctos ¡Vuelva a Intentarlo!');</script>";
				echo"<script> location.href='/SISTEMA/Gestionar_Asistencia/Mostar_Asistencia/inasistencia.php'</script> ";
			} 

			else
			{
	echo"<script> alert ('datos guardados!');</script>";
	echo"<script> location.href='/SISTEMA/Gestionar_Asistencia/Mostar_Asistencia/inasistencia.php'</script> ";



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



public function reporte($cedula,$observacion) 

{
		include_once('../../conectar.php');
$conectar = new conectar();

$sql="SELECT * from inasitencia,personal where observacion='$observacion' and  personal.cedula='$cedula'";
$result=pg_query($conectar->con(), $sql);
$encontrados=pg_num_rows($result);


if($encontrados>0){ 

echo'<div id="Contacto">
    <h1>Reporte </h1>
';


echo '<table  border="3">';
echo  '


<tr><th id="encatabla">Nombre </th>
<th id="encatabla">Apellido </th>
<th id="encatabla">Cedula </th>
<th id="encatabla">Fecha  </th>
<th id="encatabla">Observacion</th></tr>';
while($datos=pg_fetch_array($result)) {
	echo '
<tr><td>'.$datos['nombre'].'</td>
<td>'.$datos['apellido'].'</td>
<td>'.$datos['cedula'].'</td>
<td>'.$datos['fecha'].'</td>
<td>'.$datos['observacion'].'</td></tr>';
}
echo '</table>';
} else {
echo '<center><h3>No se ha encontrado al Docente!</h3><br/><a href="/SISTEMA/Gestionar_Reporte/Gestionar_Reporte.php">Intente nuevamente</a></center>';
}
echo"
</div>
";
return $reporte;
}


public function historial($cedula) 

{
		include_once('../../conectar.php');
$conectar = new conectar();

$sql="SELECT * from actividad,personal where personal.cedula='$cedula' and actividad.cedula='$cedula'";
$result=pg_query($conectar->con(), $sql);
$encontrados=pg_num_rows($result);

if($encontrados>0){ 

echo'<div id="Contacto">
    <h1>Historial de Usuario</h1>
';


echo '<table  border="3">';
echo  '


<tr><th id="encatabla">Nombre </th>
<th id="encatabla">Apellido </th>
<th id="encatabla">Cedula </th>
<th id="encatabla">Fecha  </th>
<th id="encatabla">Actividad</th></tr>';
while($datos=pg_fetch_array($result)) {
	echo '
<tr><td>'.$datos['nombre'].'</td>
<td>'.$datos['apellido'].'</td>
<td>'.$datos['cedula'].'</td>
<td>'.$datos['fecha'].'</td>
<td>'.$datos['actividad'].'</td></tr>';
}
echo '</table>';
} else {
echo '<center><h3>No se ha encontrado datos!</h3><br/><a href="/SISTEMA/Gestionar_Reporte/historial.php">Intente nuevamente</a></center>';
}
echo"
</div>
";
return $reporte;
}






}

?>
