<?php


class actividad
	{
		public function actividad($actividad)
			{
				$fecha=date('Y-m-d');
				$sql="SELECT * from personal WHERE cedula ='".$_SESSION['id']."'";
	$result= pg_query($conectar->con(),$sql);

				
    if ($cedula->num_Rows()>0) 
					{
						$personal=pg_fetch_array($res);
						$sql="insert into actividad values(null, '$fecha','$actividad',
							'".$personal['cedula']."');";
						$result= pg_query($conectar->con(),$sql);

				
    if ($cedula->num_Rows($result)>0) 
							return 1;

								else
									return 0;
					} 

					

			}




	}

?>