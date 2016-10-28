<?php 
$mysqli=new mysqli("localhost","root","","bd_farmacia");
	if (mysqli_connect_errno()) {
	echo'conexion fallida:',mysqli_connect_error();
	exit(); }
require('config/class.conexion.php');//llama al archivo de la conexcion

$descripcion=$_POST['descripcion'];
$costo_unitario=$_POST['costo_unitario'];
$materno=$_POST['cantidad'];
$stock_minimo=$_POST['stock_minimo'];
$id_categoria=$_POST['id_cate'];


$array="insert into productos(descripcion,costo_unitario,cantidad,stock_minimo,id_categoria)
 values('$descripcion','$costo_unitario','$materno','$stock_minimo','$id_categoria')";
echo $array;

$resultado=$mysqli->query($array);
if ($resultado) {
	
	echo"<script>	
		window.alert('insertando exitosamente');
		location.href='admin_paginas.php';
	</script>";
}else
{
echo"<script>	
		window.alert('error');
		location.href='admin_paginas.php';
	</script>";

}

 ?>