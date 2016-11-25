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
                     <li><a href="/SISTEMA/Gestionar_Asistencia/Mostar_Asistencia/inasistencia.php">Registro De Inasistencia</a></li> </ul>
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
            <li><a href="/SISTEMA/Contacto/contacto.html">Contacto</a></li>
            <li><a href="/SISTEMA/Sistema_En_Construccion/Construccion.html">Manual De Usuario</a></li>
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