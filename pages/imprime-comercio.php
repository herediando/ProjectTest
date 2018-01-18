<?php 
include ("InicioUsuario2.php");
?> 
  <head>
  <meta charset="UTF-8">
  <title>Imprime</title>

  <link rel="stylesheet" href="media/css/dataTables.bootstrap.min.css">

  <!-- Buttons DataTables -->
  <link rel="stylesheet" href="media/css/buttons.bootstrap.min.css">
  <link rel="stylesheet" href="media/css/font-awesome.min.css">

</head>

<center>
<h4><font face="Arial, Helvetica, sans-serif">Ingrese código del comercio</font></h4>

      <form action="imprimir-comercio.php" method="post" name="form" >
        <div class="input-group custom-search-form col-md-3">                                  
          <input type="text" class="form-control" placeholder="1234" name="codigo_comercio" 
                                    onkeyUp="return ValNumero(this);" maxlength="4">
          <span class="input-group-btn">
          <button type="submit" class="btn btn-default">
          <i class="fa fa-search"></i>
          </button>
          </span>
        </div>
      </form>

        <div class="form-group col-md-3"> <!-- Submit Button -->
            <a href="imprimir-comercio.php"><button type="reset" class="btn btn-default"><span class="glyphicon glyphicon-print"></span> IMPRIMIR TODOS LOS COMERCIOS</button></a>

            
        </div>  

</center>
<body>
  <div class="row fondo">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <h1 class="text-center text-uppercase">USUARIOS</h1>
    </div>
  </div>
  
  <!--<div class="row">
    <div id="cuadro2" class="col-sm-12 col-md-12 col-lg-12 ocultar">
      <form class="form-horizontal" action="" method="POST">
        <div class="form-group">
          <h3 class="col-sm-offset-2 col-sm-8 text-center">         
          Formulario de Registro de Usuarios</h3>
        </div>
        <input type="hidden" id="username" name="username" value="0">
        <input type="hidden" id="opcion" name="opcion" value="registrar">
        <div class="form-group">
            <div class="form-group" >
              <label for="nombre" class="cols-sm-2 control-label">Nombre</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Ingrese su nombre"  onKeyPress="return valida(event,this,0,20)" onBlur="valida2(this,0,20)" required/>
                </div>
              </div>
            </div>
                  <!--Apellido
            <div class="form-group">
              <label for="apellido" class="cols-sm-2 control-label">Apellido</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="apellido" id="apellido"  placeholder="Apellido" onKeyPress="return valida(event,this,0,20)" onBlur="valida2(this,0,20)" required/>
                </div>
              </div>
            </div>
      <!--Email
            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Correo</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-at fa" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" name="email" id="email"  placeholder="correo@megasoft.com" onKeyPress="return valida(event,this,5,30)" onBlur="valida2(this,5,30)"required/>
                </div>
              </div>
            </div>
                  <!--Fecha Nacimiento
            <div class="form-group">
              <label for="f_nacimiento" class="cols-sm-2 control-label">Fecha de Nacimiento</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                  <input type="date" class="form-control" name="f_nacimiento" id="f_nacimiento"  placeholder="Fecha de Nacimiento" required/>
                </div>
              </div>
            </div>
                  <!--Nombre Usuario
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Nombre Usuario</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="username" id="username"  placeholder="Usuario" onKeyPress="return valida(event,this,0,10)" onBlur="valida2(this,0,10)"required/>
                </div>
              </div>
            </div>
        <!--Password
            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Contraseña</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" data-minlength="6" name="password" id="password"  placeholder="Contraseña" required/>
                
                                </div>
                <div class="help-block">Minimo 6 caracteres</div>
              </div>
            </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-8">
            <input id="" type="submit" class="btn btn-primary" value="Guardar">
            <input id="btn_listar" type="button" class="btn btn-primary" value="Volver">
          </div>
        </div>
      </form>
      <div class="col-sm-offset-2 col-sm-8">
        <p class="mensaje"></p>
      </div>
      
    </div>
  </div>-->
  <div class="row">
    <div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
      <div class="col-sm-offset-2 col-sm-8">
        <h3 class="text-center"> <small class="mensaje"></small></h3>
      </div>
      <div class="table-responsive col-sm-12">    
        <table id="dt_cliente" class="table table-bordered table-hover" cellspacing="0" width="100%">
          <thead>
            <tr>                
              <th>Username</th>
              <!--<th></th>-->                      
            </tr>
          </thead>          
        </table>
      </div>      
    </div>    
  </div>
  <script src="media/js/jquery.dataTables.min.js"></script>
  <script src="media/js/dataTables.bootstrap.js"></script>
  <!--botones DataTables--> 
  <script src="media/js/dataTables.buttons.min.js"></script>
  <script src="media/js/buttons.bootstrap.min.js"></script>
  <!--Libreria para exportar Excel-->
  <script src="media/js/jszip.min.js"></script>
  <!--Librerias para exportar PDF-->
  <script src="media/js/pdfmake.min.js"></script>
  <script src="media/js/vfs_fonts.js"></script>
  <!--Librerias para botones de exportación-->
  <script src="media/js/buttons.html5.min.js"></script>
<script>    
    $(document).on("ready", function(){
      listar();
      guardar();
      eliminar();
    });

    var listar = function(){
        $("#cuadro2").slideUp("slow");
        $("#cuadro1").slideDown("slow");
      var table = $("#dt_cliente").DataTable({
        //"processing": true,
        //"serverSide": true,
        "destroy":true,
        "ajax":{
          "method":"POST",
          "url": "listar.php"
        },
        "columns":[
          {"data":"username"},
        ],
        "language": idioma_espanol,
        "dom": "<'row'<'form-inline' <'col-sm-offset-5'B>>>"
           +"<'row' <'form-inline' <'col-sm-1'f>>>"
           +"<rt>"
           +"<'row'<'form-inline'"
           +" <'col-sm-6 col-md-6 col-lg-6'l>"
           +"<'col-sm-6 col-md-6 col-lg-6'p>>>",
        "buttons":[
          
          {
                    extend:    'excelHtml5',
                    text:      '<i class="fa fa-file-excel-o"></i>',
                    titleAttr: 'Excel'
             },
             {
              extend: 'csvHtml5',
              text: '<i class="fa fa-file-text-o"></i>',
              titleAttr: 'CSV'
             },
             {
                    extend:    'pdfHtml5',
                    text:      '<i class="fa fa-file-pdf-o"></i>',
                    titleAttr: 'PDF'
             }
        ]
      });

    }

    var idioma_espanol = {
        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }
    

  </script>
  </body>

  </html>