<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"bd_farmacia");


$u=$_POST['usr'];// RECURERA DATOS DEL FORMULARIO
$p=$_POST['pwd'];// RECURERA DATOS DEL FORMULARIO


$sql="select * from usuario where(usuario='$u' and clave='$p')";//COMPARA DATOS DEL FORMULARIO CON LA  BASE DE DATOS
$rs=mysqli_query($con,$sql) or die('error de conexion');        

// CUENTA EL NUMERO DE FILAS Q HAY, SI HAY UNA FILA QUIERE DECIR Q EL USUARIO SE ENCUENTRA EN LA BASE DE DATOS
// Y SI NO QUIERE DECIR QUE NO HAY NINGUN USUARIO 

if(mysqli_num_rows($rs)!=0)

	{
			session_start();//con esto se inicia la session
				
			$r=mysqli_fetch_array($rs);//convierte la matriz en un vector
			$_SESSION['usuario']=$r["usuario"];//transfiere valores al la variable $_SESSION
			//header("location:admin_usuarios.php");//direcciona a admin.php
			echo "<script>
			window.alert('bienvenido !!');
			location.href='admin_paginas.php';
			</script>";
				


	
	}
	else
	{
			echo "<script>
		window.alert('clave o contraseñas incorrectas intente nuevamente !!');
		location.href='index.php';
		</script>";
			//header("location:index.php");		
    }
?>
