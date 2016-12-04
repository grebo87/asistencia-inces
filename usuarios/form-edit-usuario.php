
	<fieldset>	
	<div class="row">
		<div class="col-md-6">
			<label class="label_formulario" for="cedula">Cedula </label>
			<input type="text" name="cedula" id="cedula" readonly class="form-control" value="<?php echo $usuarios['cedula']; ?>">
		</div> 
	</div><br>
		
	<div class="row">
		<div class="col-md-6">
			<label class="label_formulario"  for="login">Login </label>
			<input type="text" name="login" id="login" class="form-control" readonly required value="<?php echo $usuarios['login']; ?>">
		</div>
	</div><br>

    <div class="row">
		<div class="col-md-6">   
			<label class="label_formulario" for="tipo" >Tipo </label>
			<select name="tipo"  type="text"  required class="form-control">
				<option  value="">Seleccione</option>
				<option  value="1" <?php echo ($usuarios['tipo'] == '1')? 'selected' : '' ;?>>Administrador</option> 
				<option  value="0" <?php echo ($usuarios['tipo'] == '0')? 'selected' : '' ;?>>Usuario</option>			
			</select>
		</div> 
	</div><br>


	<div class="row">
		<div class="col-md-6">
			<label class="label_formulario" for="estatus">estatus </label>
			<select name="estatus"  type="text"  required class="form-control">
				<option  value="" selected>Seleccione</option>
				<option  value='1' <?php echo ($usuarios['estatus'] == '1')? 'selected' : '' ;?>>Activo</option> 
				<option  value='0' <?php echo ($usuarios['estatus'] == '0')? 'selected' : '' ;?>>Inactivo</option> 
			</select>
		</div> 
	</div><br>

	<div class="row">
		<div class="col-md-6">
		<input type="hidden" value="<?php echo $usuarios['id']; ?>">
		<input type="submit" value="Registrar" class="btn btn-primary" />
		
		<input type="reset" value="Borrar" class="btn btn-default">
					            
		</div> 
	</div><br>	             
					            
	</fieldset>

