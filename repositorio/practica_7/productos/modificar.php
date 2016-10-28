<?php 

require('conexcion.php');
$id=$_GET['id'];



$query="SELECT * from productos where id_producto=$id";

$resultado=$mysqli->query($query);
$row=$resultado->fetch_assoc();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>modificar producto</title>
</head>
<body>

<h1>formulario de modificacion</h1>

 <form action="edit.php" method="post">

 <input	type="hidden" name="id" id="id" value="<?php echo $id;?>">

DESCRIPCION:
<input type="text" name="descripcion" id="descripcion" value="<?php echo $row['descripcion'];?>"><br>
COSTO UNITARIO:
<input type="text" name="costo_unitario" id="costo_unitario" value="<?php echo $row['costo_unitario'];?>"><br>
CANTIDAD:
<input type="text" name="cantidad" id="cantidad" value="<?php echo $row['cantidad'];?>"><br>
STOCK MINIMO:
<input type="text" name="stock_minimo" id="stock_minimo" value="<?php echo $row['stock_minimo'];?>">
<br>
CATEGORIA:
<input type="text" name="id_categoria" id="id_categoria" value="<?php echo $row['id_categoria'];?>"><br>

<input type="submit" name="Enviar"><br>
 </form>




</body>
</html>




 