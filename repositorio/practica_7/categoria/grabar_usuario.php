<?php 
require('conexcion.php');//llama al archivo de la conexcion

$nombresssss=$_POST['descripcion'];





$query="insert into categoria(descripcion)
 values('$nombresssss')";
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