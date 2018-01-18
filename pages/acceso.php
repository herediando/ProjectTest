<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {

  echo"<link rel='icon' href='../images/icono-candado.png'>"; 

echo "<body bgcolor='gray'><center><br><img src='images/icono-candado.png' height='500'></br></center>";

          echo'<script type="text/javascript">window.alert("Esta pagina es solo para usuarios registrados, inicie sesión o contacte con Tecnología")</script>';
    echo'<SCRIPT>window.location="../"</SCRIPT>';  
   //echo "<br><br><a href='registrar.html'>Registrarme</a>";
echo "<img src='images/stop.png' height='800'>";
exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();
  echo"<link rel='icon' href='images/icono-candado.png'>"; 

echo "<body bgcolor='gray'><center><br><img src='images/fondo_caracas.jpg' height='500'></br></center>";

          echo'<script type="text/javascript">window.alert("Su sesión ha expirado, por su seguridad vuelva a iniciar sesión")</script>';
    echo'<SCRIPT>window.location="index.php"</SCRIPT>';  
   //echo "<br><br><a href='registrar.html'>Registrarme</a>";
echo "<img src='images/stop.png' height='800'>";
exit;
}

?>