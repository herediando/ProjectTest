<?php
include("conexion.php");

$query = "UPDATE comercio SET
							nombre_comercio			='$_POST[nombre_comercio]', 
							ramo_comercio			='$_POST[ramo_comercio]',
							ubicacion_comercio		='$_POST[ubicacion_comercio]',
							url						='$_POST[url]',
							nombre_patrocinante		='$_POST[nombre_patrocinante]',	
							tipo_proyecto			='$_POST[tipo_proyecto]',
							nombre_server			='$_POST[nombre_server]',
							nombre_sistema_operativo='$_POST[nombre_sistema_operativo]',
							marca_impresora			='$_POST[marca_impresora]',
							modelo_impresora		='$_POST[modelo_impresora]',
							nombre_aplicativo		='$_POST[nombre_aplicativo]',
							integrador				='$_POST[integrador]',
							nombre_tecnico			='$_POST[nombre_tecnico]', 
							finicio					='$_POST[finicio]',
							ffin 					='$_POST[ffin]',
							status 					='$_POST[status]',
							status_impl 			='$_POST[status_impl]',
							observaciones 			='$_POST[observaciones]'      						 
                   WHERE nombre_comercio = '$_POST[nombre_comercio]'";						 

		  $resultado = mysql_query($query);
       if (!$resultado)
         {
		 // echo "<script> 	alert('Error al Ingresar Habitante SIN Cedula'); history.go(-1) </script>";
          echo "No se pudo ejecutar con exito el Ingreso en la tabla comercio: " . mysql_error();
          exit;
		  die;
         }	
	
      echo "<script> alert('Datos Modificados Exitosamente'); history.go(-2)</script>";	
	 
 
?>
  
  