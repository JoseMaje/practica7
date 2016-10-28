<?php 

require('conexcion.php');
$id=$_GET['id'];


$query="SELECT * from categoria where id_categoria=$id";

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

<input type="submit" name="Enviar"><br>
 </form>




</body>
</html>




 