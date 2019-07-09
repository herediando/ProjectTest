<?php
include("InicioUsuario2.php");
?>
<link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables_themeroller.css">
<link rel="stylesheet" type="text/css" href="media/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="media/css/buttons.dataTables.min.css">
<script type="text/javascript" language="javascript" src="media/js/jquery.datatables.min.js">
</script>

<script>
    //estas son las variables que recibimos de funciones.php
    $(document).ready(function() {
        $('#example').DataTable({

            "ajax": "functions/functions.php",
            "columns": [{
                    "data": "codigo_comercio"
                },
                {
                    "data": "nombre_comercio"
                },
                {
                    "data": "nombre_patrocinante"
                },
                {
                    "data": "tipo_proyecto"
                },
                {
                    "data": "status"
                },
                {
                    "data": "status_impl"
                }
            ]
        });
    });
</script>
<!DOCTYPE html>
<html lang="en">
<html>

<body class="home">
    <div class="user-dashboard">
        <h1>Listado de Comercios registrados</h1><br></br>
        <div class="gutter">
            <table id="example" class="table-striped table-bordered table-hover " cellspacing="0" width="100%">
                <thead>
                    <!--cabecera de la tabla dinamica-->
                    <tr height="40">
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Patrocinante</th>
                        <th>Proyecto</th>
                        <th>Status</th>
                        <th>Status IMPL</th>

                    </tr>
                </thead>
                </tbody>
            </table>
        </div>
</body>
</html>