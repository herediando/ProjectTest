<?php

include("conexion.php");

function EliminarRelacion($cedula)
{
  

           $query = "delete from relhabitantes
                            where (relhabcedula = '$cedula')";
                  

           $resultado = mysql_query($query);
   
           if (!$resultado)
             {
      echo
      "<script>
      alert('Error al Eliminar el Servicio: $servicio($valor)');
      history.go(-1)
      </script>";
               echo "No se pudo ejecutar con exito la Eliminacion en la BD: " . mysql_error();
               exit;
             }
           else
              {

                echo "<script> alert('Datos Eliminados Exitosamente'); history.go(-2)</script>";
      
              }      
 }
  
  
  if(isset($_POST['cedula']) && empty($_POST['cedula']))  
    {
       echo "<script> alert('Debe Ingresar Cedula Habitante a Eliminar, Por favor Seleccionar los Servicios'); history.go(-1)</script>";                
    }
    
   $cedula = $_POST['cedula'];
   
   $query = "select * from relhabitantes where (relhabcedula = '$cedula')";
     
   $resultado = mysql_query($query);
     
   while ($fila = mysql_fetch_array($resultado)) 
      {
        EliminarRelacion($cedula);
      } 
   
      $query = "delete from habitantes where (habcedula = '$cedula')";
                  

     $resultado = mysql_query($query);
   
     if (!$resultado)
      {
     echo "<script>alert('Error al Eliminar Habitante: $cedula');
      history.go(-1)
      </script>";
       echo "No se pudo ejecutar con exito la Eliminacion en la BD: " . mysql_error();
               exit;
      }
     else
       {
        echo "<script> alert('Datos Eliminados Exitosamente'); history.go(-2)</script>";
       }
?>