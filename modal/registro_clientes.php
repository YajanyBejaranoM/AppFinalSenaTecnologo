	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="nuevoCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header" style="background:#0E6655; color:black ">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h2 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Registrar Cliente</h2>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_cliente" name="guardar_cliente">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="nombre" name="nombre" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="telefono" class="col-sm-3 control-label">Teléfono</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="telefono" name="telefono" >
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="email" class="col-sm-3 control-label">Email</label>
				<div class="col-sm-8">
					<input type="email" class="form-control" id="email" name="email" >
				  
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="direccion" class="col-sm-3 control-label">Dirección</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="direccion" name="direccion"   maxlength="255" ></textarea>
				  
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="estado" class="col-sm-3 control-label">Estado</label>
				<div class="col-sm-8">
				 <select class="form-control" id="estado" name="estado" required>
					<option value="">-- Selecciona estado --</option>
					<option value="1" selected>Activo</option>
					<option value="0">Inactivo</option>
				  </select>
				</div>
			  </div>
			 
			 
			 
			
		  </div>
		  <div class="modal-footer">
			  <center>
			<button type="button" class="btn btn-default" data-dismiss="modal" style="background:#0E6655 ; color:black">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos" style="background:#0E6655 ; color:black">Registrar Cliente</button>
		</center>
		</div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>