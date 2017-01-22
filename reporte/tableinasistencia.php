<table class="table table-striped" cellspacing="0" width="50%">
						<thead>
							<tr>
								<th>Fhecha</th>
								<th>observacion</th>
								
							</tr>
						</thead>
						<tbody>	

				<?php if( $datos != 0){

					foreach ($datos as $value) { ?>											
							<tr>
								<td><?php echo date('d-m-Y', strtotime($value['fecha']));?></td>
								<td><?php echo $value['observacion'];?> <br> <?php echo ( !is_null($value['observacion2'] )  ) ? $value['observacion2']  : '';?></td>
								
							</tr>						
						
				<?php } 
				}else{?>
							<tr>
								<td colspan="3">No hay Registros</td>
								
							</tr>	
				<?php } ?>
				
						</tbody>
				</table>