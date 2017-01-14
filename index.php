<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inces</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<div class="row" ><br>
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-4">
			<div class="login-panel panel panel-default" style="border: 0px; background-image: url('Reloj.png');background-repeat: no-repeat;background-position: bottom right;">
				<div class="panel-heading">Registro de Asistencia</div>
				<div class="panel-body">
					<br>						
						<form role="form" method="post" action="/SISTEMA/asistencia/store-asistencia1.php">
							<fieldset>
								<div class="form-group">
									<label>Cedula</label>
									<input class="form-control" placeholder="Ej: 12345678" name="cedula" type="text" autofocus="">
								</div><br>
								<div class="form-group">
									<input type="submit" value="Enviar" class="btn btn-primary">
								</div>								
								

							</fieldset>
							<br>
						</form><br>		<a href="login.php" >Iniciar Sesión</a>			
					
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	



	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>