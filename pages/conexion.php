<?php
	$host      = "localhost";
	$user      = "root";
	$password  = "";
	$basedatos = "bd_sistema";
	$conexion=mysql_connect($host,$user,$password) or die ("Problema al conectar el HOST"); 
    mysql_select_db($basedatos,$conexion) or die ("Problema al conectar la Base de Datos");
?>