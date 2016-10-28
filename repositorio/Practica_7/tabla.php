 <table>
 <th>usuario</th>
 <th>clave</th>
 <th>nombre</th>
 <th>correo</th>
 <th>Editar</th>
 <th>Eliminar</th>

<?php 

$farmacia = Farmacia::ningunDato();

$datos = $farmacia->select();

while ($row = $datos->fetch_array()) {
	
	echo '<tr>';
	echo '<td>',$row['usuario'] ,'</td>';
	echo '<td>',$row['clave'] ,'</td>';
	echo '<td>',$row['nombre'] ,'</td>';
	echo '<td>',$row['correo'] ,'</td>';
	echo "<td> <a href=\"admin_usuarios.php?accion=editar&&id=$row[id_usuario]\">Editar</a> </td>";
	echo "<td> <a href=\"admin_usuarios.php?accion=eliminar&&id=$row[id_usuario]\">Eliminar</a> </td>";

	echo '</tr>';
}


 ?>

</table>