<?php 
if ( (isset($_GET['accion'])) && (isset($_GET['id'])) && ($_GET['accion'] == 'editar')) {

	$id = $_GET['id'];

	$farmacia = Farmacia::soloId($id);

	$array = $farmacia->selectId();

	$datos = $array->fetch_array();

	$accion = 'update';
	
}

if ((isset($_GET['accion'])) && (isset($_GET['id'])) && ($_GET['accion'] == 'eliminar')) {

	
	$id = $_GET['id'];

	$farmacia = Farmacia::soloId($id);

	$array = $farmacia->delete();
}




?>