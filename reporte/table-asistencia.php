<table class="table table-striped" cellspacing="0" width="50%">
						<thead>
							<tr>
								<th>Fhecha</th>
								<th>entrada</th>
								<th>salida</th>
							</tr>
						</thead>
						<tbody>	

				<?php if( $datos != 0){

					foreach ($datos as $value) { ?>											
							<tr>
								<td><?php echo date('d-m-Y', strtotime($value['fecha']));?></td>
								<td><?php echo ( !is_null($value['entrada'] ) ) ? date('h:i:s a', strtotime($value['entrada']))  : '<span class="glyphicon glyphicon-remove"></span>';?></td>
								<td><?php echo ( !is_null($value['salida'] )  ) ? date('h:i:s a', strtotime($value['salida']))  : '<span class="glyphicon glyphicon-remove"></span>';?></td>
							</tr>						
						
				<?php } 
				}else{?>
							<tr>
								<td colspan="3">No hay Registros</td>
								
							</tr>	
				<?php } ?>
				
						</tbody>
				</table>