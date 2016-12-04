
	<fieldset>	
	<div class="row">
		<div class="col-md-6">
			<label class="label_formulario" for="cedula">Cedula </label>
			<select name="cedula"  id="cedula"  required class="form-control">
					<?php echo $usuario->allPersonal(); ?>
			</select>
		</div> 
	</div><br>
		
	<div class="row">
		<div class="col-md-6">
			<label class="label_formulario"  for="login">Login </label>
			<input type="text" name="login" id="login" class="form-control" required>
		</div>
	</div><br>

	<div class="row">
		<div class="col-md-6">	            
			<label class="label_formulario" for="contrasena">Contraseña</label>
			<input type="password" id="contrasena" name="contrasena" class="form-control" required />
		</div>
	</div><br>

	<div class="row">
		<div class="col-md-6">
			<label class="label_formulario" for="r_contrasena">Repetir Contraseña </label>
			<input type="password" id="r_contrasena" name="r_contrasena"required class="form-control">  <br>
    	</div> 
	</div><br>

    <div class="row">
		<div class="col-md-6">   
			<label class="label_formulario" for="tipo" >Tipo </label>
			<select name="tipo"  type="text"  required class="form-control">
				<option  value="" selected>Seleccione</option>
				<option  value="1">Administrador</option> 
				<option  value="0">Usuario</option>			
			</select>
		</div> 
	</div><br>


	<div class="row">
		<div class="col-md-6">
			<label class="label_formulario" for="estatus">estatus </label>
			<select name="estatus"  type="text"  required class="form-control">
				<option  value="" selected>Seleccione</option>
				<option  value='1' >Activo</option> 
				<option  value='0'>Inactivo</option> 
			</select>
		</div> 
	</div><br>

	<div class="row">
		<div class="col-md-6">
		<input type="submit" value="Registrar" class="btn btn-primary" />
		
		<input type="reset" value="Borrar" class="btn btn-default">
					            
		</div> 
	</div><br>	             
					            
	</fieldset>

