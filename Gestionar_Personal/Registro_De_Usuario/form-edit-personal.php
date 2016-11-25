<form  action="/SISTEMA/Gestionar_Personal/Registro_De_Usuario/modificar1.php" enctype="multipart/form-data" method="POST" name="formulario" id="formulario">
	<fieldset>	

		<label class="label_formulario"  for="nombre">Nombre </label>
		<input type="text" name="nombre" id="nombre" value="<?php echo $datos['nombre']; ?>" required>
		<br/>

		<label class="label_formulario"  for="apellido">Apellido </label>
		<input type="text" name="apellido" id="apellido" value="<?php echo $datos['apellido'];?>"required>
					            
		<label class="label_formulario" for="cedula">Cedula</label>
		<input type="text" id="cedula" name="cedula" placeholder="Ej:27637377" value="<?php echo $datos['cedula'];?>"required readonly />
		
		<label class="label_formulario" for="fecha_n">Fecha de Nacimiento </label>
		<input type="date" id="fecha_n" name="fecha_n"  value="<?php echo $datos['fecha_n'];?>" required>  <br>
							            
		<label class="label_formulario" for="correo">Email</label>
		<input type="text" id="correo" name="correo" placeholder="Ej:usuario@dominio.com"  value="<?php echo $datos['correo'];?>" required />
					          
		<label class="label_formulario" for="cargo">Cargo </label>
		<select name="cargo"  type="text"  required>
			<option <?php echo ($datos['cargo'] == 'Administrativo')? 'selected': '' ;?> >Administrativo</option> 
			<option <?php echo ($datos['cargo'] == 'Docente')? 'selected': '' ;?> > Docente</option> 
			<option <?php echo ($datos['cargo'] == 'Obrero')? 'selected': '' ;?> >Obrero</option>
		</select> 
		<br>

		<label class="label_formulario" for="estatus">estatus </label>
		<select name="estatus"  type="text"  required>
			<option <?php echo ($datos['estatus'] == '1')? 'selected': '' ;?> value='1' >activo</option> 
			<option <?php echo ($datos['estatus'] == '0')? 'selected': '' ;?>  value='0'>inactivo</option> 
		</select> 


		<input type="reset" value="Borrar información">
					            
		<input type="submit" value="Registrar" />
					             
					            
	</fieldset>

</form>