<?php 

require('conexcion.php');
$id=$_GET['id'];




$query="SELECT * from ventas where id_ventas=$id";

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




FECHA:
<input type="date" name="fecha" id="fecha" value="<?php echo $row['fecha'];?>"><br>
PRODUCTO:
<input type="text" name="id_producto" id="id_producto" value="<?php echo $row['id_producto'];?>"><br>
CANTIDAD:
<input type="text" name="cantidad" id="cantidad" value="<?php echo $row['cantidad'];?>"><br>
TOTAL:
<input type="text" name="total" id="total" value="<?php echo $row['total'];?>">
<br>
USUARIO:
<input type="text" name="id_usuario" id="id_usuario" value="<?php echo $row['id_usuario'];?>"><br>

<input type="submit" name="Enviar"><br>
 </form>




</body>
</html>




 