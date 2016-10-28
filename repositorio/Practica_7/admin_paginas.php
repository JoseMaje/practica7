
<?php session_start(); 
include 'config/class.farmacia.php';
$datos = array('usuario'=>'', 'clave'=>'', 'nombre'=>'', 'correo'=>'', 'id'=>'');
$accion = 'insert';

include 'get.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<title>.:Inicio:.</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
</head>
<body>
<header>
		<div class="container"><center><h1>Almacen DON MANOLO</h1></center></div>
</header>
<div class="container col-md-12">
	<br>
	<div class="row">
		<div class="col-md-4">
		<form action="procesa_login.php" method="post">
		<ul class="nav nav-pills nav-justified">
			<li role="presentation" class="active"><a href="#">INICIO</a></li>
			<li role="presentation"><a href="admin_usuarios.php">USUARIOS</a></li>
			<li role="presentation"><a href="categoria/index.php">CATEGORIA</a></li>
			<li role="presentation"><a href="ventas/index.php">VENTAS</a></li>
			<li role="presentation"><a href="productos/index.php">PRODUCTOS</a></li>
		</ul>
		</form>	
		</div>

	</div>
</div>
<div class="container">
	<section class="main row">
		<article class="col-md-12">
			<section class="content">
			<center><h1>REGISTRO DE PRODUCTO</h1></center>
			 <form action="grabar_producto.php" method="post">
			 <center>
			 	<table><tr>
			 	<td>DESCRIPCION:</td>
			 	<td><input type="text" name="descripcion" id="descripcion"></td>
			 </tr>
			 <tr>
			 	<td>COSTO UNITARIO:</td>
			 	<td><input type="text" name="costo_unitario" id="costo_unitario"></td>
			 </tr>
			 <tr>
			 	<td>CANTIDAD:</td>
			 	<td><input type="text" name="cantidad" id="cantidad"></td>
			 </tr>
			 <tr>
			 	<td>STOCK MINIMO</td>
			 	<td><input type="text" name="stock_minimo" id="stock_minimo"></td>
			 </tr>
			 <tr>
			 	<td>CATEGORIA:</td>
			 	<td>
			 	<select class="form-control" name="id_cate">
         		<option value="">Selecionar</option>
         		<option value="1">Suero</option>
         		<?php 
         		foreach ($listarCategoria as $listarCat) { 
         			$dato['listarCategoria']=$this->Farmacia->listar_categoria();?>
         		<option value="<?php echo $listarCat->id_categoria?>"><?php echo $listarCat->descripcion; ?></option>
          		<?php  } ?>
         		</select></td>
			 </tr>
			  <tr>
			 	<td colspan="2"><input type="submit" name="enviar"></td>
			 </tr>
			</table> 
			 </center></form>
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
