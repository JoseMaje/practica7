<?php 
require('conexcion.php');

$id=$_POST['id'];
$nombresssss=$_POST['descripcion'];
$paternosss=$_POST['costo_unitario'];
$materno=$_POST['cantidad'];
$ci=$_POST['stock_minimo'];
$ext=$_POST['stock_minimo'];




$query=" UPDATE productos set descripcion='$nombresssss',costo_unitario='$paternosss',cantidad='$materno',stock_minimo='$ci',id_categoria='$ext'  where id_producto='$id'";


$resultado=$mysqli->query($query);


if ($resultado) {
	
	echo"<script>	
		window.alert('modificado exitosamente');
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