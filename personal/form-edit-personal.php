
<fieldset>

    <div class="row">
        <div class="col-md-6">
            <label class="label_formulario"  for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $persona['nombre']; ?>" required>
        </div> 
    </div><br>

    <div class="row">
        <div class="col-md-6">
            <label class="label_formulario"  for="apellido">Apellido: </label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $persona['apellido']; ?>" required>
        </div> 
    </div><br>


    <div class="row">
        <div class="col-md-6">
           
            <label class="label_formulario" for="cedula">Cedula:</label>
            <input type="text" id="cedulaPersonal" name="cedula" class="form-control"  placeholder="Ej:27637377" value="<?php echo $persona['cedula']; ?>" required />
        </div> 
    </div><br>

    <div class="row">
        <div class="col-md-6">
             <label class="label_formulario"  for="cod_personal">Codigó Personal: </label>
            <input type="text" name="cod_personal" id="cod_personal" class="form-control" value="<?php echo $persona['cod_personal']; ?>"  required>
        </div> 
    </div><br>

    <div class="row">
        <div class="col-md-6">
           <label class="label_formulario" for="fecha_n">Fecha de Nacimiento: </label>
            <input type="date" id="fecha_n" name="fecha_n"  class="form-control" value="<?php echo $persona['fecha_n']; ?>"  required>
        </div> 
    </div><br>

    <div class="row">
        <div class="col-md-6">
           
            <label class="label_formulario" for="correo">Email:</label>
            <input type="text" id="correo" name="correo" placeholder="Ej:usuario@dominio.com" value="<?php echo $persona['correo']; ?>" class="form-control" required />
        </div> 
    </div><br>

    <div class="row">
        <div class="col-md-6">
           <label class="label_formulario" for="cargo">Cargo: </label>
            <select name="cargo"  type="text" class="form-control"  required>
                <option  value=""> Elige una opción </option>
                <option value="Administrativo" <?php echo ($persona['cargo'] == 'Administrativo')? 'selected' : '' ?> >Administrativo</option>
                <option value="Docente" <?php echo ($persona['cargo'] == 'Docente')? 'selected' : '' ?> > Docente</option>
                <option value="Obrero" <?php echo ($persona['cargo'] == 'Obrero')? 'selected' : '' ?> >Obrero</option>
            </select>
        </div> 
    </div><br>

    <div class="row">
        <div class="col-md-6">
           <label class="label_formulario" for="status">Estatus: </label>
            <select name="status"  type="text" class="form-control"  required>
                <option  value=""> Elige una opción </option>
                <option value="Activo" <?php echo ($persona['status'] == 'Activo')? 'selected' : '' ?> >Activo</option>
                <option value="Jubilado" <?php echo ($persona['status'] == 'Jubilado')? 'selected' : '' ?> > Jubilado</option>
                <option value="Retirado" <?php echo ($persona['status'] == 'Retirado')? 'selected' : '' ?> >Retirado</option>
            </select>
        </div> 
    </div><br>

    <div class="row">
        <div class="col-md-6">
           
            <input type="submit" value="Actualizar" class="btn btn-primary" />
            
        </div> 
    </div><br>        
            
</fieldset>
