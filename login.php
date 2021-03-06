<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inces - Login</title>

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
	<div class="row">
		<center>
		<img src="/SISTEMA/Imagenes_Sistema/LogoMinisterio.jpg" width="50%" height="50%">
		</center>
	</div>
	<br><br>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Iniciar Sesión</div>
				<div class="panel-body">
					<form role="form" action="/SISTEMA/seguridad/logueo.php" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Login" name="login" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="contrasena" type="password" value="">
							</div>
							
							<input type="submit" value="Iniciar Sesión" class="btn btn-primary"> <a href="index.php" class="btn btn-default">Atras</a>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	



	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>