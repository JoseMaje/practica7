<?php 

		session_start();//inicia sesion
		session_destroy();//cierra sesion 
		header("location:index.php");//redirecciona al login.php
?>