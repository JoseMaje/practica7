<?php 
require('conexcion.php');//llama al archivo de la conexcion

$nombresssss=$_POST['descripcion'];
$paternosss=$_POST['costo_unitario'];
$materno=$_POST['cantidad'];
$ci=$_POST['stock_minimo'];
$ext=$_POST['id_categoria'];





$query="insert into productos(descripcion,costo_unitario,cantidad,stock_minimo,id_categoria)
 values('$nombresssss','$paternosss','$materno','$ci','$ext')";
echo $query;

$resultado=$mysqli->query($query);


if ($resultado) {
	
	echo"<script>	
		window.alert('insertando exitosamente');
		location.href='index.php';
	</script>";
}else
{
echo"<script>	
		window.alert('errorrrrrrrrrrr');
		location.href='index.php';
	</script>";

}

 ?>