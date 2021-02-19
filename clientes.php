<?php
	
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
	
	require_once ("config/db.php");
	require_once ("config/conexion.php");
	
	$active_facturas="";
	$active_productos="";
	$active_clientes="active";
	$active_usuarios="";	
	$title="Clientes | Sistema de Ventas";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("head.php");?>
  </head>
  <body>
	<?php
	include("navbar.php");
	?>
	
    <div class="container">
	<div class="panel panel-info">
		<div class="panel-heading" style="background:#0E6655; color:black ; font-size:14px">
		    <div class="btn-group pull-right" style="background:#0E6655; color:black ; font-size:14px">
				<button type='button' class="btn btn-info" data-toggle="modal" data-target="#nuevoCliente" style="background:#0E6655; color:black ; font-size:14px"><span class="glyphicon glyphicon-plus" ></span> Nuevo Cliente</button>
			</div>
			<h2><i class='glyphicon glyphicon-list-alt'></i> Listar Clientes</h2>
		</div>
		<div class="panel-body" style="background:#0E6655; color:black ; font-size:14px">
		
			
			
			<?php
				include("modal/registro_clientes.php");
				include("modal/editar_clientes.php");
			?>
			<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Cliente</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre del cliente" onkeyup='load(1);'>
							</div>
							<div class="col-md-3">
								<button type="button" class="btn btn-default" onclick='load(1);'>
									<span class="glyphicon glyphicon-search" ></span> Buscar</button>
								<span id="loader"></span>
							</div>
							
						</div>
				
				
				
			</form>
				<div id="resultados"></div>
				<div class='outer_div'></div>
			
		
	
			
			
			
  </div>
</div>
		 
	</div>
	<hr>
	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="js/clientes.js"></script>
  </body>
</html>
