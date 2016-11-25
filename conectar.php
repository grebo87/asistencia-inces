<?php
class conectar 
{
public function con()
	{
	  $con=pg_connect("host='localhost' dbname='sistema' user='grebo' password='123'");
          return $con;
         
	}
}

 
	?>
