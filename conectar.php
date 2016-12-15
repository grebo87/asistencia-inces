<?php
class conectar 
{
public function con()
	{
	  $con=pg_connect("host='localhost' dbname='sistema' user='gnuxdar' password='123'");
          return $con;
         
	}
}

 
	?>
