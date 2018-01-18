<?php
	$server = "localhost";
	$user = "root";
	$password = "";//poner tu propia contraseña, si tienes una.
	$bd = "bd_sistema";

	$conexion = mysqli_connect($server, $user, $password, $bd);
	if (!$conexion){ 
		die('Error de Conexión: ' . mysqli_connect_errno());	
	}
?>

