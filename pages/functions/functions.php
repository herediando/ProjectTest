<?php
$hostname='localhost'; 
$user='root';
$pass='root';
$dbase='bd_sistema';
$connection = mysqli_connect("$hostname" , "$user" , "$pass","$dbase"); 
$consulta = "SELECT nombre_comercio,codigo_comercio,nombre_patrocinante,tipo_proyecto,status,status_impl FROM comercio;";
$registro = mysqli_query($connection, $consulta);

//guardamos en un array multidimensional todos los datos de la consulta
$i=0;
$tabla = "";

while($row = mysqli_fetch_array($registro))
{
$tabla.='{"nombre_comercio":"'.$row['nombre_comercio'].'","codigo_comercio":"'.$row['codigo_comercio'].'","nombre_patrocinante":"'.$row['nombre_patrocinante'].'","tipo_proyecto":"'.$row['tipo_proyecto'].'","status":"'.$row['status'].'","status_impl":"'.$row['status_impl'].'"},';
$i++;
}
$tabla = substr($tabla,0, strlen($tabla) - 1);

echo '{"data":['.$tabla.']}';

?>
