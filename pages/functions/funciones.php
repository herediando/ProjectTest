<?php
$hostname='localhost'; 
$user='root';
$pass='root';
$dbase='bd_sistema';
$connection = mysqli_connect("$hostname" , "$user" , "$pass","$dbase"); 
$consulta = "SELECT username,password,nombre,apellido,email,f_nacimiento FROM usuario;";
$registro = mysqli_query($connection, $consulta);

//guardamos en un array multidimensional todos los datos de la consulta
$i=0;
$tabla = "";

while($row = mysqli_fetch_array($registro))
{
$tabla.='{"username":"'.$row['username'].'","password":"'.$row['password'].'","nombre":"'.$row['nombre'].'","apellido":"'.$row['apellido'].'","email":"'.$row['email'].'","f_nacimiento":"'.$row['f_nacimiento'].'"},';
$i++;
}
$tabla = substr($tabla,0, strlen($tabla) - 1);

echo '{"data":['.$tabla.']}';

?>
