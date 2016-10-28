<?php 
session_start(); 
require('conexcion.php');
$query="SELECT id_producto,descripcion,costo_unitario, cantidad,stock_minimo,id_categoria FROM productos";
$resultado=$mysqli->query($query);


 ?>
 <html>
 <head>
  <meta charset="utf-8">
 	<title>registro de producto</title>
 	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.css">
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
			<li role="presentation"><a href="../admin_paginas.php">INICIO</a></li>
			<li role="presentation"><a href="../admin_usuarios.php">USUARIOS</a></li>
			<li role="presentation"><a href="../categoria/index.php">CATEGORIA</a></li>
			<li role="presentation"><a href="../ventas/index.php">VENTAS</a></li>
			<li role="presentation" class="active"><a href="productos/index.php">PRODUCTOS</a></li>
		</ul>
		</form>	
		</div>

	</div>
</div>
<div class="container">
	<section class="main row">
		<article class="col-md-12">
			<section class="content">
 <CENTER><h1>REDISTRO DE PRODUCTOS</h1></CENTER>
<a href="nuevo.php">NUEVO PRODUCTO</a>
<p> </p>
 <table border=1 widhth="80%">
<thead>
<tr>

<td><b>NUMERO</b> </td>
<td><b>DESCRIPCION</b> </td>
<td><b>COSTO UNITARIO</b> </td>
<td><b>CANTIDAD</b> </td>
<td><b>STOCK MINIMO</b> </td>
<td><b>CATEGORIA</b> </td>

<TH COLSPAN="2"><B>ACCION</B></TH>
								
</tr>


<tbody>
<?php while($row=$resultado->fetch_assoc()){ ?>
<tr>

<td><?php echo $row['id_producto']; ?> 	</td>
<td><?php echo $row['descripcion']; ?></td>
<td><?php echo $row['costo_unitario']; ?></td>
<td><?php echo $row['cantidad']; ?></td>
<td><?php echo $row['stock_minimo']; ?></td>
<td><?php echo $row['id_categoria']; ?></td>

<td><a href="modificar.php?id=<?php echo $row['id_producto'];?>">Modificar</a> </td>

<td><a href="eliminar.php?id=<?php echo $row['id_producto'];?>">Eliminar</a> </td>

</tr>
<?php } ?>

</tbody>

</thead>


 </table>
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