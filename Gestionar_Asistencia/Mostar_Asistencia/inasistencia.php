<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>inces</title>

<link rel="stylesheet" type="text/css" href="/SISTEMA/CSS/Style_Sistema.css"/>
<link rel="stylesheet" type="text/css" href="Style_Mostrar_Asistencia.css"  />
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
   
      <form  action="/SISTEMA/Gestionar_Personal/Registro_De_Usuario/inasistencia1.php" enctype="multipart/form-data" method="POST" name="formulario" id="formulario">
   <fieldset>
          <h1> Registro De Inasistencia </h1>
          <label class="label_formulario" for="cedula">Cedula </label>
  <input type="text" id="cedula" name="cedula" placeholder="Ej: 12345678" maxlength="8" required  />
    
            <label class="label_formulario" for="cargo">observacion </label>
   


      
            <select name="observacion"  type="text"  required>
       
  

             <option selected value="0"> Elige una opción </option>
   <option >Inasistencia Injustificada</option> 
   <option >Retraso</option> 
   <option >Reposo Medico</option>
   <option >Observacion</option> 


   
   


   
</select>
            <input type="reset" value="Borrar información">
            
            <input type="submit" value="Registrar" />
            
            
        </fieldset>
    </form>
</div>
</table>
</body>
</html>