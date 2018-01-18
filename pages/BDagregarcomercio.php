<?php

include("conexion.php");

		$query = "insert into comercio
		                    (nombre_comercio,
							ramo_comercio,
							ubicacion_comercio,
							url,
							nombre_patrocinante,
							tipo_proyecto,
							nombre_server,
							nombre_sistema_operativo,
							marca_impresora,
							modelo_impresora,
							nombre_aplicativo,
							integrador,
							nombre_tecnico,
							finicio,
							ffin,
							status,
							status_impl,
							codigo_comercio,
							observaciones)							  
		 values
		 (
		 '$_POST[nombre_comercio]', 
		 '$_POST[ramo_comercio]',
		 '$_POST[ubicacion_comercio]',
		 '$_POST[url]',
		 '$_POST[nombre_patrocinante]',
		 '$_POST[tipo_proyecto]',
		 '$_POST[nombre_server]',
		 '$_POST[nombre_sistema_operativo]',
		 '$_POST[marca_impresora]',
		 '$_POST[modelo_impresora]',
		 '$_POST[nombre_aplicativo]',
		 '$_POST[integrador]', 
		 '$_POST[nombre_tecnico]',
		 '$_POST[finicio]',
		 '$_POST[ffin]',
		 '$_POST[status]',
		 '$_POST[status_impl]',
		 '$_POST[codigo_comercio]',
		 '$_POST[observaciones]')";

		 //$codigo=$_POST['id_comercio']; 
		 
		  $resultado = mysql_query($query);
       if (!$resultado)
         {

          echo "<script> alert('Codigo Ya existe, Por favor intente con uno distinto'); history.go(-1)</script>";	
          exit;
		  die;
         }	
	
      echo "<script> alert('Datos Registrados Exitosamente'); </script>";	
	 
 
?>