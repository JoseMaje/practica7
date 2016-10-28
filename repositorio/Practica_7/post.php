<?php 
include 'config/class.farmacia.php';

if (isset($_POST['submit'])) {
	
	if ($_POST['accion'] == 'insert') {
		
		$usr = $_POST['usuario'];
		$cla = $_POST['clave'];
		$nom = $_POST['nombre'];
		$cor = $_POST['correo'];


		$farmacia = new Farmacia($usr, $cla, $nom, $cor);

		$farmacia->insert();


	}

	if ($_POST['accion'] == 'update') {
			
			
			$usr = $_POST['usuario'];
			$cla = $_POST['clave'];
			$nom = $_POST['nombre'];
			$cor = $_POST['correo'];
			$id = $_POST['id'];


			$farmacia = new Farmacia($usr, $cla, $nom, $cor, $id);

			$farmacia->update();

		}
	

}

 ?>