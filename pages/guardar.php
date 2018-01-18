<?php 
	include("conexion2.php");

	$username = $_POST["username"];	
	$opcion = $_POST["opcion"];

	if($opcion == "registrar" || $opcion == "modificar"){//obtener el valor de los campos
		$username = $_POST["username"];
		$nombre = $_POST["nombre"];
		$password = $_POST["password"];
	}

	$informacion = [];

	switch ( $opcion ) {
		case 'registrar':
				if( $username != "" && $nombre != "" && $password != "" ){
					$existe = existe_usuario($password, $conexion);
					if( $existe > 0 ){
						$informacion["respuesta"] = "EXISTE";
						echo json_encode($informacion);
					}else{
						registrar($username, $password, $nombre,$apellido, $email, $f_nacimiento, $conexion);
					}									
				}else{
					$informacion["respuesta"] = "VACIO";
					echo json_encode($informacion);
				}
			break;
		case 'modificar':
			modificar($username, $nombre, $password, $username, $conexion);
			break;		
		case 'eliminar':
			eliminar($username, $conexion);
			break;
		default:
			$informacion["respuesta"] = "OPCION_VACIA";
			echo json_encode($informacion);
			break;
	}

	function existe_usuario($password, $conexion){
		$query = "SELECT username FROM usuario WHERE username = '$username';";
		$resultado = mysqli_query($conexion, $query);
		$existe_usuario = mysqli_num_rows( $resultado );
		return $existe_usuario;
	}

	function registrar($username, $nombre, $password, $conexion){
		$query = "INSERT INTO usuario VALUES('$username', '$password', '$nombre','$apellido', '$email','$f_nacimiento',1, 1);";
		$resultado = mysqli_query($conexion, $query);		
		verificar_resultado($resultado);
		cerrar($conexion);
	}

	function modificar($username, $nombre, $password, $username, $conexion){	
		$query= "UPDATE usuario SET 	username='$username', 
										nombre='$nombre', 
										password='$password' 
								WHERE   username=$username";
		$resultado = mysqli_query($conexion, $query);
		verificar_resultado( $resultado );
		cerrar( $conexion );
	}

	function eliminar($username, $conexion){
		$query = "UPDATE usuario SET id_privilegio = 0 WHERE username = $username";
		$resultado = mysqli_query($conexion, $query);
		verificar_resultado( $resultado );
		cerrar( $conexion );
	}

	function verificar_resultado( $resultado ){
		if( !$resultado )	$informacion["respuesta"] = "ERROR";
		else 	$informacion["respuesta"] = "BIEN";
		echo json_encode( $informacion );
	}

	function cerrar( $conexion ){
		mysqli_close( $conexion );
	}

 ?>