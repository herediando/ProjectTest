<?php 
include ("InicioUsuario2.php");
?>
<script>
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}

function limpia() {
    var val = document.getElementById("miInput").value;
    var tam = val.length;
    for(i = 0; i < tam; i++) {
        if(!isNaN(val[i]))
            document.getElementById("miInput").value = '';
    }
}
</script>

<script>function ValidaSoloNumeros() {
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;
}
</script>
<form action="BDagregarcomercio.php" method="post" name="form1" >

  <div class="container">
      <legend class="text-center header">Agregar Comercio</legend>

        <!--<div class="form-group col-md-3"> <!-- Comercio 
          <label for="full_name_id" class="control-label">Código del Comercio</label>
            <input type="number" class="form-control" id="codigo_comercio " name="codigo_comercio " placeholder="12345" required>
        </div> -->
        <div class="form-group col-md-3"> <!-- Zip Code-->
            <label for="zip_id" class="control-label">Código del Comercio</label>
            <input type="text" class="form-control" id="codigo_comercio" name="codigo_comercio" placeholder="Código" maxlength="4" onkeyUp="return ValNumero(this);" required>
        </div> 
        <div class="form-group col-md-3"> <!-- Comercio -->
          <label for="full_name_id" class="control-label">Nombre del Comercio</label>
            <input type="text" class="form-control" id="nombre_comercio" name="nombre_comercio" placeholder="Mega Soft, C.A." required>
        </div>     
        <div class="form-group col-md-3"> <!-- Street 1 -->
          <label for="street1_id" class="control-label">Ramo del Comercio</label>
            <select name="ramo_comercio" class="form-control" id="ramo_comercio" name="ramo_comercio">
              <option>Agencia de Viajes</option>
              <option>Alimentos</option>
              <option>Articulos Damas y Caballeros</option>
              <option>Articulos de cocina</option>
              <option>Articulos Varios</option>
              <option>Automercado</option>
              <option>Boletería para Eventos</option>
              <option>Cadena Farmacias</option>
              <option>Calzados</option>
              <option>Centro Comercial</option>
              <option>Cerámicas</option>
              <option>Cine</option>
              <option>Cine | Eventos</option>
              <option>Comercio de Pinturas</option>
              <option>Comida rápida</option>
              <option>Cosméticos</option>
              <option>Courier</option>
              <option>Cuidado Personal</option>
              <option>Educación</option>
              <option>Electrodomésticos</option>
              <option>Eventos</option>
              <option>Licorería</option>
              <option>Muebles y Accesorios del Hogar</option>
              <option>Pago de bienes y servicios</option>
              <option>Perfumería</option>
              <option>Periódico</option>
              <option>Publicación de avisos</option>
              <option>Seguros</option>
              <option>Supermercado</option>
              <option>Telecomunicaciones</option>
              <option>Telefonía</option>
              <option>Tienda por departamento</option>
              <option>Tiendas Electrónicas</option>
              <option>Turismo y Ocio</option>
              <option>Universidad</option>
              <option>Viajes y Turismo</option>
              <option>Zapatos</option>
             </select> 
        </div>                                            
                            
        <div class="form-group col-md-3"> <!-- Ubicacion Comercio -->
          <label for="full_name_id" class="control-label">Ubicaci&oacute;n del Comercio</label>
            <input type="text" class="form-control" id="ubicacion_comercio" name="ubicacion_comercio" placeholder="La California">
        </div> 
    
        <div class="form-group col-md-3"> <!-- Zip Code-->
            <label for="zip_id" class="control-label">URL</label>
            <input type="url" class="form-control" id="url" name="url" placeholder="www.tusitio.com.ve">
        </div>
        <div class="form-group col-md-3"> <!-- Street 2 -->
          <label for="nombre_patrocinante" class="control-label">Patrocinante Primario</label>
            <select name="nombre_patrocinante" class="form-control" id="nombre_patrocinante">
              <option> Activo</option>
              <option> Banesco</option>
              <option> Banplus</option>
              <option> BBVA</option>
              <option> BDV</option>
              <option> BFC</option>
              <option> BOD</option>
              <option> BOD-CC</option>
              <option> Comercio</option>
              <option> Exterior</option>
              <option> Sofitasa</option>
              <option> Otro </option>
            </select> 
        </div> 
        <div class="form-group col-md-3"> <!-- Street 2 -->
          <label for="tipo_proyecto" class="control-label">Tipo de Proyecto</label>
            <select name="tipo_proyecto" class="form-control" id="tipo_proyecto">
              <option> Boton de pago</option>
              <option> Caja Registradora</option>
              <option> Otro </option>
            </select> 
        </div> 

        <div class="form-group col-md-3"> <!-- City-->
          <label for="nombre_server" class="control-label">Servidor Merchant Server</label>
            <select name="nombre_server" class="form-control" id="nombre_server">
              <option> Beco</option>
              <option> C.C. Aviadores</option>
              <option> C.C. Costa Azul </option>
              <option> C.C. Lider</option>
              <option> C.C. Millennium</option>
              <option> Central </option>
              <option> Madeirense</option>
              <option> Cines Unidos</option>
              <option> Cinex Evenpro </option>
              <option> Epa</option>
              <option> Excelsior Gama</option>
              <option> Farmatodo </option>
              <option> Gina</option>
              <option> Multicomercio Banesco</option>
              <option> Multicomercio BOD </option>
              <option> Multicomercio El Tijerazo</option>
              <option> Multicomercio Mega Soft</option>
              <option> Multicomercio Telefonica</option>
              <option> Payment Gateway SIGO</option>
              <option> Plaza's</option>
              <option> Recarga Celular</option>
              <option> Seguros Caracas</option>
              <option> Sofitasa</option>
              <option> TecniCiencias</option>
              <option> No definido</option>
              <option> Otro</option>
             </select> 
        </div>
        <div class="form-group col-md-3"> <!-- Zip Code-->
            <label for="nombre_sistema_operativo" class="control-label">Sistema Operativo del Equipo</label>
            <select name="nombre_sistema_operativo" class="form-control" id="nombre_sistema_operativo">
              <option> Linux</option>
              <option> Windows</option>
              <option> Mac </option>
              <option> Otro</option>
             </select> 
        </div>      

        <div class="form-group col-md-3"> <!-- Zip Code-->
            <label for="zip_id" class="control-label">Impresora Fiscal | Marca</label>
            <select class="form-control" id="marca_impresora" name="marca_impresora" ">
              <option> BIXOLON</option>
              <option> HP</option>
              <option> EPSON</option>
              <option> XEROX </option>
              <option> KYOCERA</option>
              <option> SAMSUNG</option>
             </select> 
        </div>  
        <div class="form-group col-md-3"> <!-- Zip Code-->
            <label for="zip_id" class="control-label">Impresora Fiscal | Modelo</label>
            <input type="text" class="form-control" id="modelo_impresora" name="modelo_impresora" placeholder="Modelo">
        </div>  
        <div class="form-group col-md-3"> <!-- Zip Code-->
            <label for="zip_id" class="control-label">Nombre Aplicativo</label>
            <select class="form-control" id="nombre_aplicativo" name="nombre_aplicativo">
              <option> A2 Softway</option>
              <option> Bpos</option>
              <option> CPLG</option>
              <option> Driver Elepos</option>
              <option> Dynamics GP 2013</option>
              <option> Driver</option>
              <option> Elepos</option>
              <option> Europos</option>
              <option> Innova </option>
              <option> Ivend </option>
              <option> MIM-ATENTO (VisualFoxPro 9.0.) </option>
              <option> ORBISNET </option>
              <option> ORPOS </option>
              <option> Pixelpoint </option>
              <option> Merchant </option>
              <option> Pos&Touch </option>
              <option> POSLINE </option>
              <option> Propio </option>
              <option> Punto Agil </option>
              <option> Punto de Venta</option>
              <option> Retail Soft</option>
              <option> RP3 POS</option>
              <option> SAP-POS</option>
              <option> SigoPos</option>
              <option> Stellar</option>
              <option> Storeline</option>
              <option> Supermarket </option>
              <option> TCL-Merchant</option>
              <option> Tronweb</option>
              <option> Urbe Digital</option>
              <option> VISTA</option>
              <option> Visual Fox Pro SP 9</option>
              <option> ZCL_32_MERCHANT_CTRL (Desde SAP)</option>
              <option> N/A</option>
             </select> 

        </div>
        <div class="form-group col-md-3"> <!-- Zip Code-->
            <label for="zip_id" class="control-label">Integrador</label>
            <select class="form-control" id="integrador" name="integrador" >
              <option> A2</option>
              <option> ADM SOLUTIONS</option>
              <option> Amertrade</option>
              <option> Andras Gyomrey</option>
              <option> Better System</option>
              <option> BIGWISE</option>
              <option> Binnet</option>
              <option> Bleico</option>
              <option> Campusxity </option>
              <option> CitiXsys </option>
              <option> Comercio</option>
              <option> COMSISA </option>
              <option> CPLG </option>
              <option> DBSYS </option>
              <option> Eniac </option>
              <option> Forever Living </option>
              <option> ICG </option>
              <option> Infornet </option>
              <option> Interideas </option>
              <option> KIU System</option>
              <option> La Causa Movil</option>
              <option> Legendsoft</option>
              <option> Linea Informatica</option>
              <option> Master Savvy</option>
              <option> Mega Soft</option>
              <option> MSC /Telefonica</option>
              <option> Multicomputer </option>
              <option> N/A</option>
              <option> Netsoft Technologys</option>
              <option> Orion Consultores</option>
              <option> Partech</option>
              <option> POS TOUCH</option>
              <option> Posline</option>
              <option> RP3</option>
              <option> Seinca</option>
              <option> SMS</option>
              <option> SOFOS</option>
              <option> SolucionesLive </option>
              <option> Tailon</option>
              <option> VPOS Standalone</option>
              <option> Wikot</option>
             </select> 

        </div>  
        <div class="form-group col-md-3"> <!-- Zip Code-->
            <label for="zip_id" class="control-label">Implementador | T&eacute;cnico</label>
            <input type="text" class="form-control" id="nombre_tecnico" name="nombre_tecnico" placeholder="Kevin M" required>
        </div>  
        <div class="form-group col-md-3"> <!-- Zip Code-->
            <label for="zip_id" class="control-label">Gesti&oacute;n | Inicio de Proyecto</label>
            <input type="date" min="1" max="10" name="finicio" placeholder="AAAA-MM-DD" class="form-control">
        </div>   
        <div class="form-group col-md-3"> <!-- Zip Code-->
            <label for="zip_id" class="control-label">Gesti&oacute;n | Fin de Proyecto</label>
            <input type="date" min="1" max="10" name="ffin" placeholder="AAAA-MM-DD" class="form-control">
        </div> 
        <div class="form-group col-md-3"> <!-- Zip Code-->
            <label for="status" class="control-label">Status</label>
              <select name="status" class="form-control" id="status">
              <option> Produccion</option>
              <option> Suspendido</option>
              <option> En gestion</option>
              <option> Otro</option>
             </select> 
        </div>  
        <div class="form-group col-md-9"> <!-- Zip Code-->
            <label for="zip_id" class="control-label">Status IMPL</label>
            <input type="text" class="form-control" id="status_impl" name="status_impl" placeholder="Breve descripci&oacute;n">
        </div> 

        <div class="form-group col-md-12"> <!-- Zip Code-->
            <label for="zip_id" class="control-label">Observaciones</label>
            <input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="Escriba alguna descripci&oacute;n">
        <br><br>
        </div>             


        <div class="form-group col-lg-offset-4 col-lg-10"> <!-- Submit Button -->
            <button type="back" class="btn btn-primary" onclick="history.back(-1)"><span class="glyphicon glyphicon-chevron-left"></span> REGRESAR</button>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>  REGISTRAR NUEVO COMERCIO</button>        
            <button type="reset" class="btn btn-default"><span class="glyphicon glyphicon-repeat"></span> VACIAR CAMPOS </button>   
        </div>     
    </div>
</form>
<!--
<form action="BDAgregarHabitantes.php" method="post" name="form1" >

<fieldset>
<legend>
<center>
<h2>Agregar Registro de Comercios</h2></center></legend>
<br>
<table width="100%" height="46" border="3">

<tr>
 <td><b>Nombre del Comercio<font color="#FF0000">*</font> </b>
    <input name="cedula" type="text" size="15" maxlength="10" placeholder="Ingrese Comercio"  onkeyUp="return ValNumero(this);">
 </td>
   
 <td><b>Tipo de Proyecto <font color="#FF0000">*</font></b>

   <select name="nivelacademico">
   <option> Boton de pago</option>
   <option> Caja Registradora</option>
   <option> Otro </option>

  </td>

   
<td><b>Servidor Merchant Server <font color="#FF0000">*</font></b>

  <select name="nivelacademico">
  <option> Boton de pago</option>
  <option> Caja Registradora</option>
  <option> Otro </option>
  <option> Beco</option>
  <option> C.C. Aviadores</option>
  <option> C.C. Costa Azul </option>
  <option> C.C. Lider</option>
  <option> C.C. Millennium</option>
  <option> Central </option>
  <option> Madeirense</option>
  <option> Cines Unidos</option>
  <option> Cinex Evenpro </option>
  <option> Epa</option>
  <option> Excelsior Gama</option>
  <option> Farmatodo </option>
  <option> Gina</option>
  <option> Multicomercio Banesco</option>
  <option> Multicomercio BOD </option>
  <option> Multicomercio El Tijerazo</option>
  <option> Multicomercio Mega Soft</option>
  <option> Multicomercio Telefonica</option>
  <option> Payment Gateway SIGO</option>
  <option> Plaza's</option>
  <option> Recarga Celular</option>
  <option> Seguros Caracas</option>
  <option> Sofitasa</option>
  <option> TecniCiencias</option>
  <option> No definido</option>
  <option> Otro</option>
  </td>
  
   <td><b>Primer Apellido <font color="#FF0000">*</font></b>
    <input name="primerapellido" type="text" size="20" placeholder="Ingrese Apellido" onKeyUp="this.value=this.value.toUpperCase();" onkeypress="return soloLetras(event)" required>
    </td></tr>
  <tr>
  <td><b>Segundo Apellido</b>
           <input name="segundoapellido" type="text" size="20" maxlength="20" onKeyUp="this.value=this.value.toUpperCase();" onkeypress="return soloLetras(event)">
   </td>
  
  <td><b>Fecha de Nacimiento</b>
       <input type="date" min="1" max="10" name="fechanacimiento" placeholder="AAAA-MM-DD" onKeyUp="this.value=this.value.toUpperCase();" required>
    </td>

  <td><b>Nacionalidad </b>
  <select name="nacionalidad">
  <option selected> Venezolano </option>
  <option> Extranjero </option>

  </td>
  
<td><b>S&eacute;xo</b>
<input type="radio" name="sexo" value="Masculino">  M 
<?php if (isset($sexo) && $sexo=="Masculino") echo "checked";?>
 <input type="radio" name="sexo" value="Femenino"> F
 <?php if (isset($sexo) && $sexo=="Femenino") echo "checked";?>
</td></tr>
<tr>
<td>
<b>Nivel de Instruccion</b>
   <select name="nivelacademico">
   <option> Sin Instruccion</option>
   <option> Maternal</option>
   <option> Primer Nivel </option>
   <option> Segundo Nivel</option>
   <option> PreEscolar </option>
   <option> Primaria </option>
   <option> Basica </option>
   <option> Bachiller</option>
   <option> Tecnico Medio</option>
   <option> Tecnico Superior</option>
   <option> Universitario </option>
   <option> Post Grado </option>
   <option> Diplomado </option>
   <option> Doctorado </option>
  </td>

<td>
<b>Parentesco</b>
  <select name="parentesco">
   <option>Jefe de Familia</option>
   <option>Conyuge</option>
   <option>Hijo</option>
   <option>Hija</option>
   <option>Hermano</option>
   <option>Hermana</option>
   <option>Sobrino</option>
   <option>Sobrina</option>
   <option>Madre</option>
   <option>Padre</option>
   <option>Nieto</option>
   <option>Nieta</option>
   <option>Primo</option>
   <option>Prima</option>
   <option>Abuela</option>
   <option>Abuelo</option>
   <option>Tio</option>
   <option>Tia</option>
   <option>Biseabuela</option>
   <option>Biseabuelo</option>
   <option>Yerna</option>
   <option>Yerno</option>
</td>

<td><b>Profesion u Oficio</b>
           <input name="profesionoficio" type="text" size="20" maxlength="30" onKeyUp="this.value=this.value.toUpperCase();" onkeypress="return soloLetras(event)">
    </td>


  
<td><b>Tel&eacute;fono Casa</b>
      <input type="text" name="telefonocasa" size="15"  onkeyUp="return ValNumero(this);">   
</td></tr>

<tr>
<td><b>Tel&eacute;fono Celular</b>
    <input type="text" name="telefonocelular" size="15"  onkeyUp="return ValNumero(this);">   
</td>

<td><b>Tel&eacute;fono Oficina</b>
<input type="text" name="telefonooficina" size="15"  onkeyUp="return ValNumero(this);">   
</td>
  
<td>
<b>Correo Electr&oacute;nico</b>
    <input type="text" name="correo">
</td> 

<td>
<b>Estado Civil</b>
<br>
   <select name="estadocivil">
   <option> Soltera </option>
   <option> Soltero </option>
   <option> Casada </option>
   <option> Casado </option>
   <option> Divorciada </option>
   <option> Divorciado </option>
   <option> Viudo </option>
   <option> Viuda </option>
   <option> Concubina </option>
   <option> Concubino </option>
</td></tr>


<tr>
<td><b>Trabaja</b>
  <input type="radio" name="trabaja" value="SI">Si
  <input type="radio" name="trabaja" value="NO" checked>No
  
</td>

<td><b>Donde Trabaja</b>
   <select name="dondetrabaja">
   <option> Institucion Publica</option>
   <option> Privada </option>
   <option> Por Cuenta propia</option>
   <option> Buhoneria </option>
   <option> Otros </option> 
</td>


   <td><b>Pensionado</b>
   <input type="radio" name="pension" value="SI">  Si
   <?php if (isset($pension) && $pension=="SI") echo "checked";?>  
    <input type="radio" name="pension" value="NO"checked> No
  <?php if (isset($pension) && $pension=="NO") echo "checked";?>
    </td>

  <td><b>Institucion Otorga la Pension</b>
  <input type="text" name="otorgopension" size="25" >   
    </td> </tr>
    <tr>
  
  <td><b>Jubilado</b>
   <input type="radio" name="jubilado" value="SI">  Si
   <?php if (isset($jubilado) && $jubilado=="SI") echo "checked";?>  
    <input type="radio" name="jubilado" value="NO"checked> No
  <?php if (isset($jubilado) && $jubilado=="NO") echo "checked";?>
   </td>

  <td><b>Institucion Otorga la Jubilacion</b>
  <input type="text" name="otorgojubilacion" size="25" >   
    </td>

<td><b>¿Posee alguna Discapacidad?</b>
       <select name="discapacidad[]" multiple="si">
     <option selected>NO TIENE</option>
     <option> AUDITIVA </option>
         <option> AUTISMO</option>
     <option> BRAZOS</option> 
     <option> CEGUERA TOTAL</option>
         <option> MENTAL</option>
         <option> MOTORA </option>
     <option> PIERNAS</option> 
         <option> PSIQUICA </option>
     <option> SENSORIAL</option> 
         <option> SINDROME DE DOWN</option>     
         <option> SORDERA TOTAL</option> 
     <option> VISUAL </option>         
</td>    
<td>
<b>Presenta Enfermedad</b>
   <select name="enfermedad[]" multiple="si">
   <option selected>NO TIENE</option>
   <option> Alergia</option>
   <option> Asma</option>
   <option> Cancer</option>
   <option> Corazon</option>
   <option> Dengue</option>
   <option> Desnutricion</option>
   <option> Diabetes</option>
   <option> Diarrea</option>
   <option> Epilepsia</option>
   <option> Hepatitis</option>
   <option> Tension Alta</option>
   <option> Tension Baja</option>
   <option> Influenza</option>
   <option> Leucemia</option>
   <option> Meningitis</option>
   <option> Neumonia</option>
   <option> SIDA</option>
   <option> Sistema Cardiaco</option>
   <option> Tuberculosis</option>
   <option> Osteoporosis</option>
</td></tr>

<tr>
<td><b>Aporta FAOV (LPH)</b>
    <input type="radio" name="aportafaovlph" value="SI">Si 
    <?php if (isset($aportafaovlph) && $aportafaovlph=="SI") echo "checked";?> 
    <input type="radio" name="aportafaovlph" value="NO"checked>No
    <?php if (isset($aportafaovlph) && $aportafaovlph=="NO") echo "checked";?>
</td>

<td><b>¿Inscrito en el CNE?</b>
        <input type="radio" name="cne" value="SI">  Si  
    <?php if (isset($cne) && $cne=="SI") echo "checked";?> 
    <input type="radio" name="cne" value="NO"checked> No
    <?php if (isset($cne) && $cne=="NO") echo "checked";?>
</td>


  
<td><b>Fecha DESDE en la Comunidad</b>
       <input type="date" min="1" max="10" name="fechacomunidad" placeholder="AAAA-MM-DD" required>
 </td>      
<td>
<b>Cedula Jefe Familia</b>
 <input name="cedulajefe" type="text" size="15" maxlength="10" placeholder="Ingrese cedula"  onkeyUp="return ValNumero(this);" required>
 <?php if (isset($cedulajefe)) echo "checked";?>  
</td></tr>
<tr>
<td>
<b>Cedula Padre</b>
 <input name="cedulapadre" type="text" size="15" maxlength="10" placeholder="Ingrese cedula"  onkeyUp="return ValNumero(this);">
 <?php if (isset($cedulapadre)) echo "checked";?>  
</td>  

<td>
<b>Cedula Madre</b>
 <input name="cedulamadre" type="text" size="15" maxlength="10" placeholder="Ingrese cedula"  onkeyUp="return ValNumero(this);">
 <?php if (isset($cedulamadre)) echo "checked";?>  
</td>    
<td>
<b>Status</b>
    <select name="status">
   <option selected>ACTIVO</option>
   <option>INQUILINO</option>
   <option>MUDADO</option>
   <option>FALLECIDO</option>
   <option>INACTIVO</option>   
</td>    
<td><b>Fecha Status</b>
       <input type="date" min="1" max="10" name="fechastatus" placeholder="AAAA-MM-DD" required>
</td>   
  
</tr>

</table>

<br>
<b>
<center><input type="submit" name="agregar" value="Agregar"></center> 
</b>
</fieldset>
</form>
</table>
<br> 
-->
</body>

</html>
