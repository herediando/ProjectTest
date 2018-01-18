<?php 
include ("InicioUsuario2.php");
?> 

<center>
<h4><font face="Arial, Helvetica, sans-serif">Ingrese código del comercio</font></h4>

<form action="elimina-comercio.php" method="post" name="form" >
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
</center>

