<?php

include("conexion.php");
  
$query = "DELETE FROM comercio WHERE nombre_comercio = '$nombre_comercio' ";
           $resultado = mysql_query($query);
   
           if (!$resultado)
             {      
               echo "No se pudo ejecutar con exito la Eliminacion en la BD: " . mysql_error();
               exit;
             }
           else
              {

                echo "<script> alert('Datos Eliminados Exitosamente'); history.go(-2)</script>";
      
              }      
  
  ?>