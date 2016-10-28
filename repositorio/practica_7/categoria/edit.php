<?php 
require('conexcion.php');

$id=$_POST['id'];
$nombresssss=$_POST['descripcion'];





$query=" UPDATE categoria set descripcion='$nombresssss'  where id_categoria='$id'";


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