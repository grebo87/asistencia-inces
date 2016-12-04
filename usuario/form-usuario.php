
	<fieldset>	

		<label class="label_formulario" for="cedula">Cedula </label>
		<select name="cedula"  id="cedula"  required>
					<?php echo $usuario->buscarPersonal(); ?>
		</select> 
		<br>
		

		<label class="label_formulario"  for="login">Login </label>
		<input type="text" name="login" id="login" required>
					            
		<label class="label_formulario" for="contrasena">Contraseña</label>
		<input type="password" id="contrasena" name="contrasena" required />
		
		<label class="label_formulario" for="r_contrasena">Repetir Contraseña </label>
		<input type="password" id="r_contrasena" name="r_contrasena"required>  <br>
          
		<label class="label_formulario" for="tipo">Tipo </label>
		<select name="tipo"  type="text"  required>
			<option  value="" selected>Seleccione</option>
			<option  value="1">Administrador</option> 
			<option  value="0">Usuario</option>			
		</select> 
		<br>

		<label class="label_formulario" for="estatus">estatus </label>
		<select name="estatus"  type="text"  required>
			<option  value="" selected>Seleccione</option>
			<option  value='1' >Activo</option> 
			<option  value='0'>Inactivo</option> 
		</select> 


		<input type="reset" value="Borrar información">
					            
		<input type="submit" value="Registrar" />
					             
					            
	</fieldset>

