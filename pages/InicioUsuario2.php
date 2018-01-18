<?php
require_once("acceso.php");
?>
<!DOCTYPE html>
<html lang="en">
<script type="text/javascript">
    function ConfirmDemo() {
    //Ingresamos un mensaje a mostrar
    var mensaje = confirm("¿Esta seguro que desea cerrar la Sesion Actual?");
        //Detectamos si el usuario acepto el mensaje
        if (mensaje) {
            document.location='logout.php';
                    }
        //Detectamos si el usuario denegó el mensaje
            else {
                alert("Seguiras aqui");
                }
                            }
</script>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proyecto Final</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="../pages/carousel.css" rel="stylesheet">

    <link rel="StyleSheet" href="css/codigo.css" media="all" tpe="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<center>  <img src="images/logotipo.png" width="20%" height="20%"></center> 

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
               
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Bienvenido <?php echo $_SESSION['username'] ?></a></li>
                        <li class="divider"></li>
                        <li><a href="#" onclick="ConfirmDemo()" class="view btn-sm active"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <form action="buscar-comercio.php" method="post" name="form" >
                            <div class="input-group custom-search-form">                                  
                              <input type="text" class="form-control" placeholder="Buscar..." name="cedula" 
                              onkeyUp="return ValNumero(this);">
                              <span class="input-group-btn">
                              <button type="submit" class="btn btn-default">
                              <i class="fa fa-search"></i>
                              </button>
                              </span>
                            </div>
                            </form>
                            <!-- /input-group -->
                        </li>
            
                        <li>
                            <a href="#"><i class="fa fa-group fa-fw"></i> Comercios<span class="fa arrow"></span></a>
                              <ul class="nav nav-second-level">
                              <li>
                                    <a href="agregar-comercio.php">Agregar</a>
                                </li>
                                <li>
                                    <a href="seguimiento-comercio.php">Consultar</a>
                                    
                                </li>
                                <li>
                                    <a href="modificar-comercio.php">Modificar</a>
                                </li>
                                <li>
                                    <a href="eliminar-comercio.php">Eliminar</a>
                                </li>

                            </ul>

                        </li>
                        <!--<li>
                            <a href="#"><i class="fa fa-home fa-fw"></i> Puntos <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="AgregarJefeFamilia.php">Agregar Punto de Venta</a>
                                </li>
                            </ul>-->
                            <!-- /.nav-second-level -->
                        </li>

                         

                       <li>
                            <a href="#"><i class="fa fa-file-o fa-fw"></i> Reportes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="comercios.php">Vista Dinamica</a>
                                </li>
                                <li>
                                    <a href="imprime-comercio.php">Imprime</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Estadistico<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Estadisticas</a>
                                </li>
                                <li>
                                    <a href="#">Selección Alternativa</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cog fa-fw"></i> Asistencia Tecnica<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Manual de Usuario</a>
                                </li>
                                <li>
                                    <a href="usuarios.php">Ver Usuarios</a>
                                    <a href="registrate.php">Registrar Usuarios</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->

        </nav>

        <div id="page-wrapper">
            <div class="row">
                <br>
                <br>
                
                <!-- /.col-lg-12 -->
            </div>

          
            
            <!-- /.row -->
     

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
 

</body>

</html>


<script language="javascript" type="text/javascript">

    //*** Este Codigo permite Validar que sea un campo Numerico
    function Solo_Numerico(variable){
        Numer=parseInt(variable);
        if (isNaN(Numer)){
            return "";
        }
        return Numer;
    }
    function ValNumero(Control){
        Control.value=Solo_Numerico(Control.value);
    }
    //*** Fin del Codigo para Validar que sea un campo Numerico


</script>
