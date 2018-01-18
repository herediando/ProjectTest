<?php 
include ("InicioUsuario2.php");
?> 
<center>
<h4><font face="Arial, Helvetica, sans-serif">Introduzca Cedula del Habitante a Eliminar </font></h4>

<form action="EliminarHabitantesConsultar.php" method="post" name="form" >
                            <div class="input-group custom-search-form">                                  
                              <input type="text" class="form-control" placeholder="Ingrese Cédula" name="cedula"
                              onkeyUp="return ValNumero(this);" >
                              <span class="input-group-btn">
                              <button type="submit" class="btn btn-default">
                              <i class="fa fa-search"></i>
                              </button>
                              </span>
                            </div>
                            </form>
</center>
