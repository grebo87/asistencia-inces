<?php
session_start();
include_once('../conectar.php');
/**
* clase para gestionar al personal
*/
class personal 
{
	
	private $conectar;
	private $nombre;
	private $apellido;
	private $cedula;
	private $cod_personal;
	private $fecha_n;
	private $correo;
	private $cargo;
	private $status;

	function __construct($nombre,$apellido,$cedula,$cod_personal,$fecha_n,$correo,$cargo,$status)
	{
		 $this->conectar     = new conectar();
		 $this->nombre       = $nombre;
		 $this->apellido     = $apellido;
		 $this->cedula       = $cedula;
		 $this->cod_personal = $cod_personal;
		 $this->fecha_n      = $fecha_n;
		 $this->correo       = $correo;
		 $this->cargo        = $cargo;
		 $this->status       = $status;
	}

	public function getAll()
	{
		$sql="select * from personal";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return pg_fetch_all($result);
		}else{
			return 0;
		}
	}

	public function storePersonal()
	{
		$sql="INSERT INTO personal(nombre,apellido,cedula,correo,cargo,fecha_n,status,cod_personal) VALUES ('$this->nombre','$this->apellido','$this->cedula','$this->correo','$this->cargo','$this->fecha_n','$this->status','$this->cod_personal')";
		
		$result= pg_query($this->conectar->con(),$sql);

		if(!$result){
			echo"<script> alert ('Uno de sus datos no han sido correctos ¡Vuelva a Intentarlo!');</script>";
			echo"<script> location.href='create-personal.php';</script> ";
		}else{
			$fecha=date('d-m-Y');
	 		$actividad =date('h:i:s').'registro un personal  ';
			$cedula1=$_SESSION['id'];
			$sql1="INSERT INTO actividad(fecha,actividad,cedula) VALUES ('$fecha','$actividad','$cedula1')";
			$result1= pg_query($this->conectar->con(),$sql1);
			//var_dump($sql1, $_SESSION['id']);
			echo"<script> alert ('datos guardados!');</script>";
			echo"<script> location.href='index.php';</script> ";

		}
	}

	public function get($id='')
	{
		$sql="select * from personal where cedula='$id'";
		$result=pg_query($this->conectar->con(), $sql);
		$encontrados=pg_num_rows($result);

		if ($encontrados > 0) {
			return pg_fetch_array($result);
		}else{
			return 0;
		}
	}


	public function updatePersonal($nombre,$apellido,$cedula,$cod_personal,$fecha_n,$correo,$cargo,$status)
	{
		$sql=" UPDATE personal set nombre='$nombre', apellido='$apellido', cedula='$cedula', cod_personal='$cod_personal', fecha_n='$fecha_n', correo='$correo', cargo='$cargo', status='$status' where cedula ='$cedula'";

		$result= pg_query($this->conectar->con(),$sql);	

		if(!$result){
				echo"<script> alert ('Datos no Modificado ¡Vuelva a Intentarlo!');</script>";
				echo"<script> location.href='edit-personal.php?id=".$cedula."';</script> ";
			
			}else{
				echo"<script> alert ('Datos  Modificado!');</script>";
				echo"<script> location.href='index.php';</script> ";
		}	
	}

	public function deletePersonal($cedula='')
	{
		$sql="delete FROM personal WHERE cedula='$cedula'";
		$result=pg_query($this->conectar->con(), $sql);
	

		if (pg_affected_rows($result) == 1) {
				echo"<script> alert ('Datos Eliminados');</script>";
				echo"<script> location.href='index.php';</script> ";
		}else{
				echo"<script> alert ('Datos no Eliminados');</script>";
				echo"<script> location.href='index.php';</script> ";
		}
	}


	public function allCedulas()
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

}

?>