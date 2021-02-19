<?php
	
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
	$active_facturas="active";
	$active_productos="";
	$active_clientes="";
	$active_usuarios="";	
	$title="Facturas | Sistema de Ventas";
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
		<div class="panel-heading" style="background:#0E6655; color:black ">
		    <div class="btn-group pull-right" style="background:#0E6655; color:black ">
				<a  href="nueva_factura.php" class="btn btn-info" style="background:#0E6655; color:black "><span class="glyphicon glyphicon-plus" ></span> Nueva Factura</a>
			</div>
			<h2 style="color: black"><i class='glyphicon glyphicon-list-alt'></i> Listar Facturas</h2>
		</div>
			<div class="panel-body" style="background:#0E6655; color:black ">
				<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Cliente o # de factura</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre del cliente o # de factura" onkeyup='load(1);'>
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
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="js/facturas.js"></script>
  </body>
</html>