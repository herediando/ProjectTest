<?php
  include("InicioUsuario2.php"); 
	include("conexion.php");
   function ConsultarRelacion($cedula, $tipo)
{
  global $resultado;
  global $mensaje;
  
    $query = "select * from relhabitantes 
                 where (relhabcedula = '$cedula'
                 and    relhabtipo   = '$tipo')";

           $resultado = mysql_query($query);
   
           if (!$resultado)
             {
         echo mysql_error();
               echo "No se pudo ejecutar con exito la Consulta en la BD: " . mysql_error();
               exit;
              }
           $mensaje = "Datos Consultados Exitosamente";
}
  
      
$nacionalidad    = ""; $cedula          = ""; $nombre1       = "";
$nombre2         = ""; $apellido1       = ""; $apellido2     = "";
$fechanacimiento = ""; $sexo            = ""; $estadocivil   = "";
$nivelacademico  = ""; $parentesco      = ""; $fechaingreso  = "";
$profesionoficio = ""; $cedulajefe      = ""; $pensionado    = ""; 
$trabaja         = ""; $dondetrabaja    = ""; $otorgopension = "";
$otorgojubilacion= ""; $fechaingreso    = ""; $faovlph       = "";
$jubilado        = ""; $cne             = ""; $cedulapadre   = "";
$cedulamadre     = ""; $status           = ""; $fechastatus  = "";
    
      $cedula=0;
      $tipo  ="";     
    $mensaje = "Error Habitante a Consular NO existe, Por Favor Verificar DATOS, Cedula: ".$_POST['cedula'];
   
  if(isset($_POST['cedula']) && !empty($_POST['cedula']))
      {
     
       $query = "select * from habitantes where (habcedula = '$_POST[cedula]')";
                
       $resultado = mysql_query($query);
     
     if(mysql_num_rows($resultado)==0)
          {
       echo "<script> alert('Cedula Habitante a Consultar NO existe, Por Favor Verificar'); </script>";
       die;
       }
   
      if (!$resultado)
  
          {
      $mensaje = "Error en la Consulta del Registro, Por Favor Verificar DATOS";
      echo "No se pudo ejecutar con exito la CONSULTA en la BD: " . mysql_error();
          exit; 
      echo "<script> alert('Consulta realizada sin exito'); history.go(-2)</script>"; die;
          }
     else
     { 
       while ($fila = mysql_fetch_array($resultado))
         {
    $nacionalidad    = $fila['habnacionalidad'];       
      $cedula          = $fila['habcedula'];            
      $nombre1         = $fila['habnombre1'];
      $nombre2         = $fila['habnombre2']; 
      $apellido1       = $fila['habapellido1'];
      $apellido2       = $fila['habapellido2'];
      $fechanacimiento = $fila['habfechanacimiento'];  
      $sexo            = $fila['habsexo'];     
      $estadocivil     = $fila['habestadocivil'];  
      $nivelacademico  = $fila['habnivelacademico'];
      $parentesco      = $fila['habparentesco'];
      $fechaingreso    = $fila['habfechaingreso'];
      $profesionoficio = $fila['haboficio'];       
      $cedulajefe      = $fila['habcedulajefe'];
    $trabaja         = $fila['habtrabaja']; 
    $dondetrabaja    = $fila['habdondetrabaja']; 
      $pensionado      = $fila['habpensionado'];
    $otorgopension   = $fila['habotorgopension'];
      $jubilado        = $fila['habjubilado'];
      $otorgojubilacion= $fila['habotorgojubilacion'];    
    $faovlph         = $fila['habFAOVLPH'];
    $cne             = $fila['habcne'];
      $status          = $fila['habstatus'];
      $fechastatus     = $fila['habfechastatus'];   
     
    if ($nacionalidad=="V") {$nacionalidad="Venezolano";}
    if ($nacionalidad=="E") {$nacionalidad="Extranjero";}
    $mensaje = "Registro Consultado Correctamente";
       }
     }
     
  $querypadre = "select * from padres where (padcedulahijo = '$_POST[cedula]')";
                
    $resultadopadre = mysql_query($querypadre);
   
    if ($resultadopadre)
   { 
        while ($padres = mysql_fetch_array($resultadopadre))
         {       
           $cedulapadre  = $padres['padcedulapadre']; 
           $cedulamadre  = $padres['padcedulamadre'];     
       }
     }   
     
 }
else
 $mensaje = "Error: Ingrese Numero Cedula Habitante a Consultar, Por Favor Verificar DATOS";     
?>

<form action="BDConsultarHabitantes.php" method="post" name="form1" >

<fieldset>
<legend><center><h2>Consultar Registro de Habitantes</h2></center></legend>
<center><?php echo $mensaje ?></center>
<br>
<table width="100%" height="46" border="3">

<tr>
 <td><b>C&eacute;dula de Identidad</b> <font color="#FF0000">*</font>
<input name="cedula" type="text" size="15" value="<?php echo $cedula ?>">
</td>
   
<td><b>Primer Nombre</b>  <font color="#FF0000">*</font>
<input name="primernombre" type="text" size="20" value="<?php echo $nombre1 ?>">
</td>
   
<td><b>Segundo Nombre</b> 
<input name="segundonombre" type="text" size="20" maxlength="20" value="<?php echo $nombre2 ?>">
</td>
  
<td><b> Primer Apellido </b> 
<font color="#FF0000">*</font>
<input name="primerapellido" type="text" size="20" value="<?php echo $apellido1 ?>">
</td></tr>
<tr>  
<td><b>Segundo Apellido</b>
<input name="segundoapellido" type="text" size="20" value="<?php echo $apellido2 ?>">
</td>

<td><b> Fecha de Nacimiento</b>
<input type="date" min="1" max="10" name="fechanacimiento" value="<?php echo $fechanacimiento ?>">
</td>

<td><b>Nacionalidad </b>
<input type="text" name="nacionalidad" value="<?php echo $nacionalidad ?>">
</td>
  
<td><b>S&eacute;xo</b>
<input type="text" name="sexo" value="<?php echo $sexo ?>"> 
</td>
</tr>
<tr>
<td>
<b>Nivel de Instruccion</b>
<input type="text" name="nivelacademico" value="<?php echo $nivelacademico ?>">     
</td>

<td>
<b>Parentesco</b>
<input type="text" name="parentesco" value="<?php echo $parentesco ?>">   
</td>

<td><b>Profesion u Oficio</b>
<input name="profesionoficio" type="text" size="20" maxlength="30" value="<?php echo $profesionoficio ?>">
</td>
  
<td><b> Tel&eacute;fono Casa</b>
<input type="text" name="telefonocasa" size="15"
      value="<?php $tipo='Telefono Casa';
                   ConsultarRelacion($cedula, $tipo);
                   while ($fila = mysql_fetch_array($resultado)) 
                    {
                      $telefonocasa= $fila['relhabvalor'];
                      echo $telefonocasa;
                    }
              ?>">  
</td></tr>
<tr>
<td><b> Tel&eacute;fono Celular</b>
<input type="text" name="telefonocelular" size="15"   
value="<?php $tipo='Telefono Celular';
                   ConsultarRelacion($cedula, $tipo);
                   while ($fila = mysql_fetch_array($resultado)) 
                    {
                      $telefonocelular= $fila['relhabvalor'];
                      echo $telefonocelular;
                    }
        ?>">  
</td>

<td><b> Tel&eacute;fono Oficina</b>
<input type="text" name="telefonooficina" size="15"  
value="<?php $tipo='Telefono Oficina';
                   ConsultarRelacion($cedula, $tipo);
                   while ($fila = mysql_fetch_array($resultado)) 
                    {
                      $telefonooficina= $fila['relhabvalor'];
                      echo $telefonooficina;
                    }
        ?>">  


</td>
  
<td><b> Correo Electr&oacute;nico</b>
<input type="text" name="correo" 
value="<?php $tipo='Correo';
                   ConsultarRelacion($cedula, $tipo);
                   while ($fila = mysql_fetch_array($resultado)) 
                    {
                      $correo= $fila['relhabvalor'];
                      echo $correo;
                    }
        ?>">  

</td>  
  
<td>
<b>Estado Civil</b>
<input type="text" name="estadocivil" value="<?php echo $estadocivil ?>">
</td></tr>
<tr>
<td><b>Trabaja</b>
<input type="text" name="trabaja" value="<?php echo $trabaja ?>">
</td>

<td><b>Donde Trabaja </b>
<input type="text" name="dondetrabaja" value="<?php echo $dondetrabaja ?>">
</td>


<td><b>Pensionado  </b>
<input type="text" name="pensionado" value="<?php echo $pensionado ?>">
</td>

<td><b>Institucion Otorga la Pension</b>
<input type="text" name="otorgopension" size="25" value="<?php echo $otorgopension ?>">   
</td></tr> 

<tr>
  
<td><b>Jubilado</b>
<input type="text" name="jubilado" size="25" value="<?php echo $jubilado ?>">   
</td>

<td><b>Institucion Otorga la Jubilacion</b>
<input type="text" name="otorgojubilacion" size="25" value="<?php echo $otorgojubilacion ?>">   
</td>

<td><b>¿Posee alguna Discapacidad?</b>
<?php
 $tipo='Discapacidades';
 echo '<select name="discapacidades[]" size="2" multiple="yes">';   
 ConsultarRelacion($cedula, $tipo);
 while ($fila = mysql_fetch_array($resultado)) 
  {
 echo '<option>'.$fila['relhabvalor'].'</option>';
  } 
 echo '</select>';
?>
</td>

<td><b>Presenta Enfermedad</b>
   <?php
 $tipo='Enfermedades';
 echo '<select name="padeceenfermedad[]" size="2" multiple="yes">';   
 ConsultarRelacion($cedula, $tipo);
 while ($fila = mysql_fetch_array($resultado)) 
  {
 echo '<option>'.$fila['relhabvalor'].'</option>';
  } 
 echo '</select>';
?>
    
</td></tr>
<tr>
<td><b>Aporta FAOV (LPH)</b>
<input type="text" name="aportafaovlph" size="25" value="<?php echo $faovlph ?>"> 
</td>

<td><b> ¿Inscrito en el CNE?</b>
<input type="text" name="cne" size="25" value="<?php echo $cne ?>"> 
</td>

  
<td><b>Fecha DESDE en la Comunidad</b>
<input type="date" name="fechaingreso" size="25" value="<?php echo $fechaingreso ?>"> 
</td>

<td>
<b>Cedula Jefe Familia</b>
 <input type="text" name="cedulajefe" size="25" value="<?php echo $cedulajefe ?>"> 
</td></tr>
<tr>
  <td>
<b>Cedula Padre</b>
 <input type="text" name="cedulapadre" size="25" value="<?php echo $cedulapadre ?>"> 
</td>

<td>
<b>Cedula Madre</b>
<br>
 <input type="text" name="cedulamadre" size="25" value="<?php echo $cedulamadre ?>"> 
</td>  
<td>
<b>Status</b>
   <input type="text" name="status" value="<?php echo $status ?>">  
</td>

<td><b>Fecha Status</b>
       <input type="date" name="fechastatus" value="<?php echo $fechastatus ?>">
</td>   
</tr>

</table>
</fieldset>
</form>
</table> 
<br>



