<?php
include("InicioUsuario2.php");
?>
<script>
  function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial)
      return false;
  }

  function limpia() {
    var val = document.getElementById("miInput").value;
    var tam = val.length;
    for (i = 0; i < tam; i++) {
      if (!isNaN(val[i]))
        document.getElementById("miInput").value = '';
    }
  }

  function ValidaSoloNumeros() {
    if ((event.keyCode < 48) || (event.keyCode > 57))
      event.returnValue = false;
  }
</script>
<form action="BDagregarcomercio.php" method="post" name="form1">
  <div class="container">
    <legend class="text-center header">Agregar Comercio</legend>
    <div class="form-group col-md-3">
      <label for="zip_id" class="control-label">Código del Comercio</label>
      <input type="text" class="form-control" id="codigo_comercio" name="codigo_comercio" placeholder="Código" maxlength="4" onkeyUp="return ValNumero(this);" required>
    </div>
    <div class="form-group col-md-3">
      <label for="full_name_id" class="control-label">Nombre del Comercio</label>
      <input type="text" class="form-control" id="nombre_comercio" name="nombre_comercio" placeholder="Mega Soft, C.A." required>
    </div>
    <div class="form-group col-md-3">
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
    <div class="form-group col-md-3">
      <label for="full_name_id" class="control-label">Ubicaci&oacute;n del Comercio</label>
      <input type="text" class="form-control" id="ubicacion_comercio" name="ubicacion_comercio" placeholder="La California">
    </div>
    <div class="form-group col-md-3">
      <label for="zip_id" class="control-label">URL</label>
      <input type="url" class="form-control" id="url" name="url" placeholder="www.tusitio.com.ve">
    </div>
    <div class="form-group col-md-3">
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
    <div class="form-group col-md-3">
      <label for="tipo_proyecto" class="control-label">Tipo de Proyecto</label>
      <select name="tipo_proyecto" class="form-control" id="tipo_proyecto">
        <option> Boton de pago</option>
        <option> Caja Registradora</option>
        <option> Otro </option>
      </select>
    </div>
    <div class="form-group col-md-3">
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
    <div class="form-group col-md-3">
      <label for="nombre_sistema_operativo" class="control-label">Sistema Operativo del Equipo</label>
      <select name="nombre_sistema_operativo" class="form-control" id="nombre_sistema_operativo">
        <option> Linux</option>
        <option> Windows</option>
        <option> Mac </option>
        <option> Otro</option>
      </select>
    </div>

    <div class="form-group col-md-3">
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
        <div class=" form-group col-md-3">
        <label for="zip_id" class="control-label">Impresora Fiscal | Modelo</label>
        <input type="text" class="form-control" id="modelo_impresora" name="modelo_impresora" placeholder="Modelo">
    </div>
    <div class="form-group col-md-3">
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
    <div class="form-group col-md-3">
      <label for="zip_id" class="control-label">Integrador</label>
      <select class="form-control" id="integrador" name="integrador">
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
    <div class="form-group col-md-3">
      <label for="zip_id" class="control-label">Implementador | T&eacute;cnico</label>
      <input type="text" class="form-control" id="nombre_tecnico" name="nombre_tecnico" placeholder="Kevin M" required>
    </div>
    <div class="form-group col-md-3">
      <label for="zip_id" class="control-label">Gesti&oacute;n | Inicio de Proyecto</label>
      <input type="date" min="1" max="10" name="finicio" placeholder="AAAA-MM-DD" class="form-control">
    </div>
    <div class="form-group col-md-3">
      <label for="zip_id" class="control-label">Gesti&oacute;n | Fin de Proyecto</label>
      <input type="date" min="1" max="10" name="ffin" placeholder="AAAA-MM-DD" class="form-control">
    </div>
    <div class="form-group col-md-3">
      <label for="status" class="control-label">Status</label>
      <select name="status" class="form-control" id="status">
        <option> Produccion</option>
        <option> Suspendido</option>
        <option> En gestion</option>
        <option> Otro</option>
      </select>
    </div>
    <div class="form-group col-md-9">
      <label for="zip_id" class="control-label">Status IMPL</label>
      <input type="text" class="form-control" id="status_impl" name="status_impl" placeholder="Breve descripci&oacute;n">
    </div>
    <div class="form-group col-md-12">
      <label for="zip_id" class="control-label">Observaciones</label>
      <input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="Escriba alguna descripci&oacute;n">
      <br><br>
    </div>
    <div class="form-group col-lg-offset-4 col-lg-10">
      <button type="back" class="btn btn-primary" onclick="history.back(-1)"><span class="glyphicon glyphicon-chevron-left"></span> REGRESAR</button>
      <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> REGISTRAR NUEVO COMERCIO</button>
      <button type="reset" class="btn btn-default"><span class="glyphicon glyphicon-repeat"></span> VACIAR CAMPOS </button>
    </div>
  </div>
</form>
</body>
</html>