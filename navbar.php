	<?php
		if (isset($title))
		{
  ?>
  
<nav class="navbar navbar-default " style="background:#0E6655">
<center>
<h1 style=" color:black ; font-size:48px  ">Sistema De Ventas</h1>
    </center>
  <div class="container-fluid">
   
    <div class="navbar-header">
      <button style="background:#0E6655" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background:#0E6655 ; color: #17202A">
      
    <ul class="nav navbar-nav">
    <?php
    if($_SESSION['user_id'] != 2){
      ?>
    <li class="<?php echo $active_usuarios;?>"><a href="usuarios.php" style="background:#0E6655; color:black ; font-size:18px; margin-left:-30px"><i  class='glyphicon glyphicon-lock'></i> USUARIOS |</a></li>
		<li class="<?php echo $active_clientes;?>"><a href="clientes.php" style="background:#0E6655; color:black ; font-size:18px"><i class='glyphicon glyphicon-user'></i> CLIENTES |</a></li>
    <li class="<?php echo $active_productos;?>"><a href="productos.php" style="background:#0E6655; color:black ; font-size:18px"><i class='glyphicon glyphicon-barcode'></i> PRODUCTOS |</a></li>
    <?php } ?>
    <li class="<?php echo $active_facturas;?>"><a href="facturas.php" style="background:#0E6655; color:black ; font-size:18px"><i class='glyphicon glyphicon-list-alt'></i> FACTURAS <span class="sr-only">(current)</span></a></li>
    
       </ul>
      <ul class="nav navbar-nav navbar-right">
		<li ><a href="login.php?logout" style="background:#0E6655; color:black ; font-size:20px"><i class='glyphicon glyphicon-off'></i></a></li>
      </ul>
    </div>
  </div>
</nav>
	<?php
		}
  ?>
 