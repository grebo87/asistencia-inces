
<fieldset>

    <div class="row">
        <div class="col-md-6">
            <label class="label_formulario"  for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div> 
    </div><br>

    <div class="row">
        <div class="col-md-6">
            <label class="label_formulario"  for="apellido">Apellido: </label>
            <input type="text" name="apellido" id="apellido" class="form-control" required>
        </div> 
    </div><br>


    <div class="row">
        <div class="col-md-6">
           
            <label class="label_formulario" for="cedula">Cedula:</label>
            <input type="text" id="cedula" name="cedula" class="form-control"  placeholder="Ej:27637377" required />
        </div> 
    </div><br>

    <div class="row">
        <div class="col-md-6">
             <label class="label_formulario"  for="cod_personal">Codigó Personal: </label>
            <input type="text" name="cod_personal" id="cod_personal" class="form-control"  required>
        </div> 
    </div><br>

    <div class="row">
        <div class="col-md-6">
           <label class="label_formulario" for="fecha_n">Fecha de Nacimiento: </label>
            <input type="date" id="fecha_n" name="fecha_n"  class="form-control"  required>
        </div> 
    </div><br>

    <div class="row">
        <div class="col-md-6">
           
            <label class="label_formulario" for="correo">Correo:</label>
            <input type="text" id="correo" name="correo" placeholder="Ej:usuario@dominio.com" class="form-control" required />
        </div> 
    </div><br>

    <div class="row">
        <div class="col-md-6">
           <label class="label_formulario" for="cargo">Cargo: </label>
            <select name="cargo"  type="text" class="form-control"  required>
                <option selected value=""> Elige una opción </option>
                <option value="Administrativo">Administrativo</option>
                <option value="Docente"> Docente</option>
                <option value="Obrero">Obrero</option>
            </select>
        </div> 
    </div><br>

    <div class="row">
        <div class="col-md-6">
           <label class="label_formulario" for="status">Estatus: </label>
            <select name="status"  type="text" class="form-control"  required>
                <option selected value=""> Elige una opción </option>
                <option value="Activo">Activo</option>
                <option value="Jubilado"> Jubilado</option>
                <option value="Retirado">Retirado</option>
            </select>
        </div> 
    </div><br>

    <div class="row">
        <div class="col-md-6">
           
            <input type="submit" value="Registrar" class="btn btn-primary" />
        </div> 
    </div><br>        
            
</fieldset>
