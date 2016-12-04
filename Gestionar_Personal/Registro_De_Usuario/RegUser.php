<!DOCTYPE html>
<?php 
        session_start();
        if ( $_SESSION['id'] ) {
          

?>
<html>
<head>
<meta charset="utf-8" />
<title>inces</title>

<link rel="stylesheet" type="text/css" href="/SISTEMA/CSS/Style_Sistema.css"/>
<link rel="stylesheet" type="text/css" href="style_Formulario_RegUser.css"  />
</head>

<body>
<div>
<!-- Inicio - Encabezado de Pagina -->

    <table id="Tabla_Principal">

<tr>
    <img src="/SISTEMA/Imagenes_Sistema/LogoMinisterio.jpg" id="img_Logo_Ministerio">
</tr>
<th>
<a href="/SISTEMA/Inicio/Inicio.php" title="Pagina de inicio"><img src="/SISTEMA/Imagenes_Sistema/inces.png" id="img_Logo_Escuela"></a>
</th>
<th>
 <h2 id="h2"> Sistema de Control de Asistencia del inces </h2>
</th>
    </table>
<!-- Final - Encabezado de Pagina -->
<!-- Inicio Del Menu Lateral-->
<?php include realpath(__DIR__.'/../../menu.php'); ?>
<!-- Final Del Menu Lateral-->

<!-- Formulario de Registro De Usuario -->

<table id="Tabla_Registro">

<div id="Contacto">
    <h1>Registrar Datos</h1>
    <form  action="/SISTEMA/Gestionar_Personal/Registro_De_Usuario/personal.php" enctype="multipart/form-data" method="POST" name="formulario" id="formulario">
        <fieldset>
           
            <label class="label_formulario"  for="nombre">Nombre: </label>
<input type="text" name="nombre" id="nombre"  required>
<br/>
		<label class="label_formulario"  for="apellido">Apellido: </label>
		<input type="text" name="apellido" id="apellido" required>
            
            <label class="label_formulario" for="cedula">Cedula:</label>
            <input type="text" id="cedula" name="cedula" placeholder="Ej:27637377" required />
            
            
                        <label class="label_formulario"  for="cod_personal">Codigó Personal: </label>
            <input type="text" name="cod_personal" id="cod_personal"  required>
            <br/>
            
            <label class="label_formulario" for="fecha_n">Fecha de Nacimiento: </label>
            <input type="date" id="fecha_n" name="fecha_n"   required> <br>
            
            
            
            <label class="label_formulario" for="correo">Email:</label>
            <input type="text" id="correo" name="correo" placeholder="Ej:usuario@dominio.com" required />
            
            
            
            
            <label class="label_formulario" for="cargo">Cargo: </label>
      
            <select name="cargo"  type="text"  required>
             <option selected value="0"> Elige una opción </option>
   <option >Administrativo</option> 
   <option > Docente</option> 
   <option >Obrero</option>


   
</select>
            <input type="reset" value="Borrar información">
            
            <input type="submit" value="Registrar" />
             
            
        </fieldset>

    </form>
</div>
</table>
</body>
</html>
<?php
} else {
           session_unset();
           header("location:../Inicio/Inicio.php");
         }
          
?>