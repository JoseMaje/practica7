<?php 
session_start(); 
require('conexcion.php');
$query="SELECT id_ventas,fecha,id_producto, cantidad,total,id_usuario FROM ventas";
$resultado=$mysqli->query($query);

 ?>
 <html>
 <meta charset="utf-8">
 <head>
 	<title>registro de ventas</title>
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
			<li role="presentation" class="active"><a href="../ventas/index.php">VENTAS</a></li>
			<li role="presentation"><a href="../productos/index.php">PRODUCTOS</a></li>
		</ul>
		</form>	
		</div>

	</div>
</div>
<div class="container">
	<section class="main row">
		<article class="col-md-12">
			<section class="content">
 <CENTER><h1>REGISTRO DE VENTAS</h1></CENTER>
<a href="nuevo.php">NUEVA VENTA</a>
 <table border=1 widhth="80%">
<thead>
<tr>
<td><b>NUMERO</b> </td>
<td><b>FECHA VENDIDA</b> </td>
<td><b>PRODUCTO</b> </td>
<td><b>CANTIDAD</b> </td>
<td><b>TOTAL</b> </td>
<td><b>USUARIO</b> </td>

<TH COLSPAN="2"><B>ACCION</B></TH>
								
</tr>


<tbody>
<?php while($row=$resultado->fetch_assoc()){ ?>
<tr>

<td><?php echo $row['id_ventas']; ?> 	</td>
<td><?php echo $row['fecha']; ?></td>
<td><?php echo $row['id_producto']; ?></td>
<td><?php echo $row['cantidad']; ?></td>
<td><?php echo $row['total']; ?></td>
<td><?php echo $row['id_usuario']; ?></td>


<td><a href="modificar.php?id=<?php echo $row['id_ventas'];?>">Modificar</a> </td>

<td><a href="eliminar.php?id=<?php echo $row['id_ventas'];?>">Eliminar</a> </td>

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