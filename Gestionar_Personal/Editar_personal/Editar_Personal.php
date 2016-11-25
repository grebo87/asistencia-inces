<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>U.E "Nuestra Señora del Carmen" </title>

<link rel="stylesheet" type="text/css" href="styleformueditar.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/SISTEMA/CSS/Style_Sistema.css"/>

</head>
</head>

<body>
<!-- Inicio - Encabezado de Pagina -->

	<table id="Tabla_Principal">

<img src="/SISTEMA/Imagenes_Sistema/LogoMinisterio.jpg" id="img_Logo_Ministerio">
<th>
<a href="/SISTEMA/Inicio/Inicio.php" title="Pagina de inicio"><img src="/SISTEMA/Imagenes_Sistema/inces.png" id="img_Logo_Escuela"></a>
</th>
<th>
 <h2 id="h2"> Sistema de Control de Asistencia del inces </h2>
</th>
	</table>
<!-- Final - Encabezado de Pagina -->
<!-- Inicio Del Menu Lateral-->
<table id="Menu_Vertical" >
<th>
<div class="Menu_Lateral">
  <nav class="vertical">
    <ul>
      <li> 
        
         <label for="home"><a class="a1" href="/SISTEMA/Inicio/Inicio.php"> Inicio </a></label>
      
      </li>
      <li>
         <label for="home"> Gestionar Personal</label>
          <input type="radio" name="verticalMenu" id="home" />
        <div>
          <ul>
            <li><a href="/SISTEMA/Gestionar_Personal/Registro_De_Usuario/RegUser.php">Agregar Personal</a></li>
            <li><a href="/SISTEMA/Gestionar_Personal/Editar_personal/Editar_Personal.php">Editar Personal</a></li>
            <li><a href="/SISTEMA/Gestionar_Personal/Buscar_Personal/Buscar_Personal.php">Buscar Personal</a></li>
           
          </ul>
        </div>
      
      </li>
      <li>
       <label for="home3"> Gestionar Asistencia</label>
          <input type="radio" name="verticalMenu" id="home3" />
        <div>
          <ul>
           <li><a href="/SISTEMA/Gestionar_Asistencia/Registro_Asistencia/Gestionar_Asistencia.php">Registro De Asistencia</a></li>
           <li><a href="/SISTEMA/Gestionar_Asistencia/Mostar_Asistencia/Mostrar_Asistencia.php">Mostrar Asistencia</a></li>
          </ul>
        </div>
      </li>
      <li>
      <label for="home4"> Gestionar Reportes</label>
          <input type="radio" name="verticalMenu" id="home4" />
        <div>
          <ul>
            <li><a href="/SISTEMA/Gestionar_Reporte/Gestionar_Reporte.php">Generar Reporte</a></li>
          <li><a href="/SISTEMA/Gestionar_Reporte/historial.php">Historia de Usuario</a></li>
          

          </ul>
        </div>
      </li>
      <li>
       <li>
       <label for="home5"> Ayuda </label>
          <input type="radio" name="verticalMenu" id="home5" />
             <div>
          <ul>
            <li><a href="/SISTEMA/Contacto/contacto.php">Contacto</a></li>
            <li><a href="/SISTEMA/Sistema_En_Construccion/Construccion.php">Manual De Usuario</a></li>
          </ul>
        </div>
      </li>
        <li>
        <label for="home6"><a class="a1" href="/SISTEMA/Inicio_De_Sesion/Formulario_Inicio_Sesion.php"> Salir</a></label>
          <input type="radio" name="verticalMenu" id="home6" />
     
    </ul>
  </nav>
  </th>

</div>
</table>
<!-- Final Del Menu Lateral-->

<div id="contact">
	<h1>Editar Personal</h1>
<form  action="/SISTEMA/Gestionar_Personal/Registro_De_Usuario/modifica.php" enctype="multipart/form-data" method="POST" name="formulario" id="formulario">
		<fieldset>
		<h3>Busqueda </h3>

		<label class="label_formulario" for="busqueda">Cedula:</label>
      <input type="search" id="busqueda" name="cedula" placeholder="Ej: 12345678" required />
			<input type="submit" value="Buscar" />
			
			
		</fieldset>
	</form>
</div>

</body>
</html>