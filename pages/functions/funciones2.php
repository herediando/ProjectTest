<?php
$hostname='localhost'; 
$user='root';
$pass='root';
$dbase='bd_intranet';
$connection = mysqli_connect("$hostname" , "$user" , "$pass","$dbase"); 
$consulta = "SELECT * FROM vehiculo;";
$registro = mysqli_query($connection, $consulta);
 $consulta2 = "select * from kilometraje,vehiculo where kilometraje.id_vehiculo= vehiculo.id_vehiculo";

//guardamos en un array multidimensional todos los datos de la consulta
$i=0;
$tabla = "";

while($row = mysqli_fetch_array($registro))
{
$tabla.='{"matricula":"'.$row['matricula'].'","modelo":"'.$row['modelo'].'","marca":"'.$row['marca'].'","color":"'.$row['color'].'","anio":"'.$row['anio'].'","km_actual":"'.$row['km_actual'].'"},';
$i++;
}
$tabla = substr($tabla,0, strlen($tabla) - 1);

echo '{"data":['.$tabla.']}';

?>
