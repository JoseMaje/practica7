<?php 
session_start();
include 'config/class.farmacia.php';
$datos = array('usuario'=>'', 'clave'=>'', 'nombre'=>'', 'correo'=>'', 'id'=>'');
$accion = 'insert';
include 'get.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>usuarios</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
</head>
<body>
<header>
		<div class="container"><center><h1>Almacen DON MANOLO</h1></center></div>
</header>
<div class="container col-md-12">
	<div class="row">
		<div class="col-md-12">
		<form action="procesa_login.php" method="post">
		<ul class="nav nav-pills nav-justified">
			<li role="presentation"><a href="admin_paginas.php">INICIO</a></li>
			<li role="presentation" class="active"><a href="admin_usuarios.php">USUARIOS</a></li>
			<li role="presentation"><a href="categoria/index.php">CATEGORIA</a></li>
			<li role="presentation"><a href="ventas/index.php">VENTAS</a></li>
			<li role="presentation"><a href="productos.php">PRODUCTOS</a></li>
		</ul>
		</form>	
		</div>
	</div>
</div>
<div class="container">
	<section class="main row">
		<article class="col-md-12">
			<section class="content">
			<form action="post.php" method="post">

	<input type="text" name="usuario" value="<?php echo $datos['usuario'] ?>" placeholder="usuario" required="requiered">
	
	<input type="password" name="clave" value="<?php echo $datos['clave'] ?>" placeholder="password" required="requiered">
	
	<input type="text" name="nombre"  value="<?php echo $datos['nombre'] ?>"placeholder="nombre" required="requiered">
	
	<input type="text" name="correo"  value="<?php echo $datos['correo'] ?>"placeholder="correo" required="requiered">

	<input type="hidden" name="id" value="<?php  echo $datos['id_usuario']?>">
	<input type="hidden" name="accion" value="<?php  echo $accion?>">
	<input type="submit" name="submit" value="Enviar /Añadir ">
	<div class="icon-user-plus"></div>
</form>
<?php include 'tabla.php';?>
    		</section>
		</article>
	</section>
</div>
<footer>
	<div class="container">
		<center><h3>Emergentes I <a href="salir.php" class="texto1">Cerrar Sesion (Salir)</a></h3></center>
	</div>
	<!--redirecciona a al archivo para cerrar la session-->
</footer>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html> 