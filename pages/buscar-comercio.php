<?php
    include("InicioUsuario2.php"); 
	include("conexion.php");
  
       $query = "select * from comercio where (codigo_comercio = '$_POST[codigo_comercio]')";
                
       $resultado = mysql_query($query);
     
      if(mysql_num_rows($resultado)==0)
          {
       echo "<script> alert('Codigo del comercio no existe, Por Favor Verificar'); history.go(-1)</script>";
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
      $nombre_comercio          = $fila['nombre_comercio'];
      $codigo_comercio          = $fila['codigo_comercio'];       
      $ramo_comercio            = $fila['ramo_comercio'];            
      $ubicacion_comercio       = $fila['ubicacion_comercio'];
      $url                      = $fila['url']; 
      $nombre_patrocinante      = $fila['nombre_patrocinante'];
      $tipo_proyecto            = $fila['tipo_proyecto'];
      $nombre_server            = $fila['nombre_server'];  
      $nombre_sistema_operativo = $fila['nombre_sistema_operativo'];     
      $marca_impresora          = $fila['marca_impresora'];  
      $modelo_impresora         = $fila['modelo_impresora'];
      $nombre_aplicativo        = $fila['nombre_aplicativo'];
      $integrador               = $fila['integrador'];
      $nombre_tecnico           = $fila['nombre_tecnico'];       
      $finicio                  = $fila['finicio'];
      $ffin                     = $fila['ffin']; 
      $status                   = $fila['status']; 
      $status_impl              = $fila['status_impl'];
      $observaciones             = $fila['observaciones'];

    $mensaje = "Codigo encontrado correctamente";
       }
     }
      
?>


<center><?php echo $mensaje ?></center>
<div class="container">
      <legend class="text-center header">Consulta Comercio</legend>
              <div class="form-group col-md-12"> <!-- Zip Code-->
            <label for="zip_id" class="control-label">C&oacute;digo</label>          
            <input type="text" class="form-control" value="<?php echo $codigo_comercio ?>" disabled> 
        </div>   

        <!--<div class="form-group col-md-3"> <!-- Comercio 
          <label for="full_name_id" class="control-label">Código del Comercio</label>
            <input type="number" class="form-control" id="codigo_comercio " name="codigo_comercio " placeholder="12345" required>
        </div> -->
        <div class="form-group col-md-3"> <!-- Comercio -->
            <label for="full_name_id" class="control-label">Nombre del Comercio</label>
            <input type="text" class="form-control" id="nombre_comercio" name="nombre_comercio"  value="<?php echo $nombre_comercio ?>" disabled>
        </div>     
        <div class="form-group col-md-3"> <!-- Comercio -->
            <label for="street1_id" class="control-label">Ramo del Comercio</label>
            <input type="text" class="form-control" id="ramo_comercio" name="ramo_comercio" value="<?php echo $ramo_comercio ?>" disabled>
        </div> 
                                    
                            
        <div class="form-group col-md-3"> <!-- Ubicacion Comercio -->
          <label for="full_name_id" class="control-label">Ubicaci&oacute;n del Comercio</label>
            <input type="text" class="form-control" id="ubicacion_comercio" name="ubicacion_comercio" value="<?php echo $ubicacion_comercio ?>" disabled>
        </div> 
    
        <div class="form-group col-md-3"> <!-- URL-->
            <label for="zip_id" class="control-label">URL</label>
            <input type="text" class="form-control" id="url" name="url" value="<?php echo $url ?>" disabled>
        </div>
        <div class="form-group col-md-3"> <!-- patrocinante -->
          <label for="nombre_patrocinante" class="control-label">Patrocinante Primario</label>
            <input type="text" class="form-control" id="nombre_patrocinante" name="nombre_patrocinante" value="<?php echo $nombre_patrocinante ?>" disabled>
        </div> 
        <div class="form-group col-md-3"> <!-- tipo d eproyecto -->
          <label for="tipo_proyecto" class="control-label">Tipo de Proyecto</label>
             <input type="text" class="form-control" id="tipo_proyecto" name="tipo_proyecto" value="<?php echo $tipo_proyecto ?>" disabled>   
        </div> 

        <div class="form-group col-md-3"> <!-- server-->
          <label for="nombre_server" class="control-label">Servidor Merchant Server</label>
            <input type="text" class="form-control" id="nombre_server" name="nombre_server" value="<?php echo $nombre_server ?>" disabled>  

        </div>
        <div class="form-group col-md-3"> <!--SO-->
            <label for="nombre_sistema_operativo" class="control-label">Sistema Operativo del Equipo</label>
            <input type="text" class="form-control" id="nombre_sistema_operativo" name="nombre_sistema_operativo" value="<?php echo $nombre_sistema_operativo ?>" disabled>  
        </div>      

<div class="form-group col-md-3"> <!-- Impresora Marca-->
            <label for="zip_id" class="control-label">Impresora Fiscal | Marca</label>
            <input type="text" class="form-control" id="marca_impresora" name="marca_impresora" value="<?php echo $marca_impresora ?>" disabled> 
        </div>  
        <div class="form-group col-md-3"> <!-- Modelo Impresora-->
            <label for="zip_id" class="control-label">Impresora Fiscal | Modelo</label>
            <input type="text" class="form-control" id="modelo_impresora" name="modelo_impresora" value="<?php echo $modelo_impresora ?>" disabled> 
        </div>  
        <div class="form-group col-md-3"> <!-- Nombre Aplicativo-->
            <label for="zip_id" class="control-label">Nombre Aplicativo</label>
            <input type="text" class="form-control" id="nombre_aplicativo" name="nombre_aplicativo" value="<?php echo $nombre_aplicativo ?>" disabled> 
        </div>
        <div class="form-group col-md-3"> <!-- Integrador-->
            <label for="zip_id" class="control-label">Integrador</label>            
            <input type="text" class="form-control" id="integrador" name="integrador" value="<?php echo $integrador ?>" disabled> 
        </div>  
        <div class="form-group col-md-3"> <!-- Zip Code-->
            <label for="zip_id" class="control-label">Implementador | T&eacute;cnico</label>          
            <input type="text" class="form-control" id="nombre_tecnico" name="nombre_tecnico" value="<?php echo $nombre_tecnico ?>" disabled> 
        </div>  
        <div class="form-group col-md-3"> <!-- inicio-->
            <label for="zip_id" class="control-label">Gesti&oacute;n | Inicio de Proyecto</label>           
            <input type="text" class="form-control" id="finicio" name="finicio" value="<?php echo $finicio ?>" disabled> 
        </div>   
        <div class="form-group col-md-3"> <!-- fin-->
            <label for="zip_id" class="control-label">Gesti&oacute;n | Fin de Proyecto</label>            
            <input type="text" class="form-control" id="ffin" name="ffin" value="<?php echo $ffin ?>" disabled> 
        </div> 
        <div class="form-group col-md-3"> <!-- status-->
            <label for="status" class="control-label">Status</label>       
                <input type="text" class="form-control" id="status" name="status" value="<?php echo $status ?>" disabled> 
        </div>  
        <div class="form-group col-md-12"> <!-- impl-->
            <label for="zip_id" class="control-label">Status IMPL</label>           
            <input type="text" class="form-control" id="status_impl" name="status_impl" value="<?php echo $status_impl ?>" disabled> 
        </div> 
        <div class="form-group col-md-12"> <!-- observaciones-->
            <label for="zip_id" class="control-label">Observaciones</label>          
            <input type="text" class="form-control" id="observaciones" name="observaciones" value="<?php echo $observaciones ?>" disabled> 
        </div>             
        


        <div class="form-group col-lg-offset-4 col-lg-10"> 
            <button type="back" class="btn btn-primary" onclick="history.back(-1)"><span class="glyphicon glyphicon-chevron-left"></span> REGRESAR</button>
        </div>  
    </div>


