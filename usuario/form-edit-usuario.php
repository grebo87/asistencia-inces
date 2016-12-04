
	<fieldset>	

		<label class="label_formulario" for="cedula">Cedula </label>
		<input type="text" name="cedula" id="cedula" required readonly value="<?php echo $datos['cedula']; ?>">
		
		<br>
		

		<label class="label_formulario"  for="login">Login </label>
		<input type="text" name="login" id="login" required readonly value="<?php echo $datos['login']; ?> ">
		
		<label class="label_formulario" for="tipo">Tipo </label>
		<select name="tipo"  type="text"  required>
			<option  value="" >Seleccione</option>
			<option  value="1" <?php echo ($datos['tipo'] == '1')? 'selected' : '' ?> >Administrador</option> 
			<option  value="0" <?php echo ($datos['tipo'] == '0')? 'selected' : '' ?> >Usuario</option>			
		</select> 
		<br>

		<label class="label_formulario" for="estatus">estatus </label>
		<select name="estatus"  type="text"  required>
			<option  value="" >Seleccione</option>
			<option  value='1' <?php echo ($datos['estatus'] == '1')? 'selected' : '' ?> >Activo</option> 
			<option  value='0' <?php echo ($datos['estatus'] == '0')? 'selected' : '' ?>>Inactivo</option> 
		</select> 


		<input type="reset" value="Borrar información">
					            
		<input type="submit" value="Editar" />
					             
					            
	</fieldset>

