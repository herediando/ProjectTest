<?php
$query = "select * from comercio where (codigo_comercio = '$_POST[codigo_comercio]')";
  require('pdf/mpdf.php');
  $mpdf=new mPDF('c','A4');
  $mpdf->writeHTML('<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ejemplo de tabla avanzada</title>
</head>

<body>
<form action="BDelimina-comercio.php" method="post" name="form1" >
<div class="container">
      <h1>Consulta Comercio</h1>

            <h2>C&oacute;digo  </h2>
 ');
  $mpdf-> Output('reporte.php','I');
?>