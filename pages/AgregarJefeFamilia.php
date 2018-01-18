<?php
require_once("acceso.php");

?>
<?php 
include("InicioUsuario2.php");
?>


<form action="BDAgregarJefeFamilia.php" method="post">

<fieldset>

<legend><h2>Agregar Jefe de Familia</h2></legend>
<br>

<table width="100%" height="46" border="3">

<tr>

<td width="13%" height="26" >
 <b>
 <font face="Arial" font size="2"> Manzana
 <select name="manzana" required>
	<option selected> 01 </option>
	<option> 02 </option>
	<option> 03 </option>
	<option> 04 </option>
	<option> 05 </option>
	<option> 06 </option>
	<option> 07 </option>
	<option> 08 </option>
	<option> 09 </option>
	<option> 10 </option>
	<option> 11 </option>
	<option> 12 </option>
	<option> 13 </option>
	<option> 14 </option>
	<option> 15 </option>
</font>
</b>
</td>  	

<td width="13%" height="26" >
<b>
<font face="Arial" font size="2"> Numero de Casa
  <select name="numerocasa" required>
	<option selected>0-01-</option>
	<option>0-02-</option>
	<option>0-03-</option>
	<option>0-04-</option>
	<option>0-05-</option>
	<option>0-06-</option>
	<option>0-07-</option>
	<option>0-08-</option>
	<option>0-09-</option>
	<option>0-10-</option>
	<option>0-11-</option>
	<option>0-12-</option>
	<option>0-13-</option>
	<option>0-14-</option>
	<option>0-15-</option>
	<option>0-16-</option>
	<option>0-17-</option>
	<option>0-18-</option>
	<option>0-19-</option>
	<option>0-20-</option>
	<option>0-21-</option>
	<option>0-22-</option>
	<option>0-23-</option>
	<option>0-24-</option>
	<option>0-25-</option>
	<option>0-26-</option>
	<option>0-27-</option>
	<option>0-28-</option>
	<option>0-29-</option>
	<option>0-30-</option>
	<option>0-31-</option>
	<option>0-32-</option>
	<option>0-33-</option>
	<option>0-34-</option>
	<option>0-35-</option>
	<option>0-36-</option>
	<option>0-37-</option>
	<option>0-38-</option>
	<option>0-39-</option>
	<option>0-40-</option>
</font>
</b>
</td>

<td width="13%" height="26" >
<b>
<font face="Arial" font size="2"> Division
  <select name="division" required>
	<option selected>0</option>
	<option>A</option>
	<option>B</option>
	<option>C</option>
	<option>D</option>
	<option>E</option>
	<option>F</option>
	<option>G</option>
	<option>H</option>
</font>
</b>
</td>



<td height="26" >
<b>
<font face="Arial" font size="2" >Cedula Jefe Familia 
      <input type="txt" name="cedulajefe" size="" maxlength="10" width="100%" required onkeyUp="return ValNumero(this);">
</font>
</b>
</td>
</tr>
<b>
</table>
<br>


<b>
<center><input type="submit" name="agregar" value="Agregar"></center>	
</b>
</fieldset>
</form>
</table> 
