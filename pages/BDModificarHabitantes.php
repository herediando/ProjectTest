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
 }	
	
function AgregarRelacion($cedula, $tipo, $valor)
{
    $query = "insert into relhabitantes
                           (relhabcedula,
                            relhabtipo,
                            relhabvalor							
                           ) 
                      values
                           ( '$cedula',
                             '$tipo',
                             '$valor'							 
                            )";

           $relacion = mysql_query($query);
	 
           if (!$relacion)
             {
			  if (mysql_errno()!=1062)
			   {
			    echo "<script> alert('Error al Ingresar en Relacion');
	            	  history.go(-1) </script>";
			    }
             }			
}

function EliminarPadres($cedula)
{
  

           $query = "delete from padres where (padcedulahijo = '$cedula')";
                  

           $resultado = mysql_query($query);
	 
           if (!$resultado)
             {
			 
			echo
			"<script>alert('Error al Eliminar PADRES'); history.go(-1) 	</script>";
               echo "No se pudo ejecutar con exito la Eliminacion en la BD: " . mysql_error();
               exit;
             }
			  
 }	

function AgregarPadres($cedula, $cedulapadre, $cedulamadre)
{
    $query = "insert into padres
                           (padcedulahijo,
                            padcedulapadre,
                            padcedulamadre							
                           ) 
                      values
                           ( '$cedula',
                             '$cedulapadre',
                             '$cedulamadre'							 
                            )";

           $padres = mysql_query($query);
	 
           if (!$padres)
             {
			  if (mysql_errno()!=1062)
			   {
			    echo "<script> alert('Error al Ingresar el PADRES');
	            	  history.go(-1) </script>";
			    }
             }			
}

$manzana    = 0;
$numerocasa = "  "; 

	$querycasa = "select * from jefefamilia where jefecedula = '$_POST[cedulajefe]'";
		
	$resultadocasa = mysql_query($querycasa);
	 
    if (!$resultadocasa)
      {
       echo "<script> alert('Error al leer Datos de JEFE FAMILIA, por favor verificar'); history.go(-1)</script>";
    	 die;
      }
    
	while ($filacasa = mysql_fetch_array($resultadocasa))
      {
	    $manzana    = $filacasa['jefemanzana'];
	    $numerocasa = $filacasa['jefenumerocasa'];    
	  }
	
	if (isset ($_POST['cedula']) && !empty($_POST['cedula']))
	   $cedula = $_POST['cedula'];
	  {
 	   EliminarRelacion($cedula);
	   EliminarPadres($cedula);  
	  }
	
	
	if (isset ($_POST["cedula"]) && !empty($_POST['cedula']))
	  { 
		
		$query = "UPDATE habitantes SET
		                 habnacionalidad             = '$_POST[nacionalidad]',
				        		 habnombre1          = '$_POST[primernombre]',    
						         habnombre2          = '$_POST[segundonombre]',   
			      			     habapellido1        = '$_POST[primerapellido]',  
			        			 habapellido2        = '$_POST[segundoapellido]', 
			        			 habfechanacimiento  = '$_POST[fechanacimiento]', 
						         habsexo             = '$_POST[sexo]',            
						         habestadocivil      = '$_POST[estadocivil]',     
						         habnivelacademico   = '$_POST[nivelacademico]',  
						         habparentesco       = '$_POST[parentesco]',      
			         			 habfechaingreso     = '$_POST[fechaingreso]', 
                                 haboficio           = '$_POST[profesionoficio]',
                                 habcedulajefe       = '$_POST[cedulajefe]',						  
						         habtrabaja          = '$_POST[trabaja]',        
						         habdondetrabaja     = '$_POST[dondetrabaja]',   
						         habpensionado       = '$_POST[pensionado]',        
						         habotorgopension    = '$_POST[otorgopension]',  
						         habjubilado         = '$_POST[jubilado]',       
						         habotorgojubilacion = '$_POST[otorgojubilacion]',
						         habFAOVLPH          = '$_POST[aportafaovlph]',  
						         habcne              = '$_POST[cne]', 
                                 habmanzana          = '$manzana',  
                                 habnumerocasa       = '$numerocasa',
                                 habstatus           = '$_POST[status]', 
                                 habfechastatus      = '$_POST[fechastatus]'  								 
                   WHERE (habcedula = '$_POST[cedula]')";						 
			
	   } 


 $resultado = mysql_query($query);
   
 if (!$resultado) 			 
  { 
  echo mysql_error();
  }
 else 
 {
 
     $cedulapadre = $_POST['cedulapadre'];
	 $cedulamadre = $_POST['cedulamadre'];
	 
	 AgregarPadres($cedula, $cedulapadre, $cedulamadre);
	 
	 if(isset($_POST['telefonocasa']) && !empty($_POST['telefonocasa']))
	  {
       $tipo   = 'Telefono Casa';
	     $valor  = $_POST['telefonocasa'];
	     AgregarRelacion($cedula, $tipo, $valor);
    }
	  
	 if(isset($_POST['telefonocelular']) && !empty($_POST['telefonocelular']))
	  {
       $tipo   = 'Telefono Celular';
	     $valor  = $_POST['telefonocelular'];
	     AgregarRelacion($cedula, $tipo, $valor);
    }
	 
	 if(isset($_POST['telefonooficina']) && !empty($_POST['telefonooficina']))
	  {
       $tipo  = 'Telefono Oficina';
	     $valor = $_POST['telefonooficina'];
	     AgregarRelacion($cedula, $tipo, $valor);
    }
	 
	 if(isset($_POST['correo']) && !empty($_POST['correo']))
	  {
       $tipo  = 'Correo';
	     $valor = $_POST['correo'];
	     AgregarRelacion($cedula, $tipo, $valor);
    }
	 
	  if(isset($_POST['discapacidad']) && !empty($_POST['discapacidad']))
	  {
        foreach ($_POST['discapacidad'] as $valores)
      {
          $tipo  = 'Discapacidades';
	      $valor = $valores;
	      AgregarRelacion($cedula, $tipo, $valor);
	    }
    }
     
	 if(isset($_POST['enfermedad']) && !empty($_POST['enfermedad']))	 
	 {
     foreach ($_POST['enfermedad'] as $valores)
     {
         $tipo  = 'Enfermedades';
	     $valor = $valores;
	     AgregarRelacion($cedula, $tipo, $valor);
     }
	 }
	
      echo "<script> alert('Datos Modificados Exitosamente'); history.go(-2)</script>";	
}	 
	 
?>
  
  