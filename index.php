<!DOCTYPE html>
<html lang="en">
<title>Log in</title>
<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
<link href="dist/css/sb-admin-2.css" rel="stylesheet">
<link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<br><br><br><br>
	<center> <img src="images/logotipo.png" width="20%" height="20%"></center>
	<div class="container">
		<div class="col-md-7">
			<form action="pages/validar.php" method="post" class="form-horizontal">
				<h4>
					<p class="text-center">
						<div class="col-sm-8">
							<h2>SISAD</h2>
					</p>
					<p>Debe ingresar un Usuario y una contrase&ntilde;a v&aacutelidos para poder acceder al sistema, si desea acceder y no tiene usuario, comuniquese con el departamento de Sistemas</p>
					</h5>
					<p></p>
		</div>
		<div class="container">
			<div class="col-xs-4"></div>
			<div class="col-md-5">
				<form action="pages/menu.php" method="post" class="form-horizontal">
					<h1>
						<p class="text-center"> Ingresar </p>
					</h1>
					<hr />
					<div class="form-group">
						<label for="name" class="cols-sm-2 control-label">Su Usuario</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="username" id="username" placeholder="Ingresa un usuario valido" required />
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="cols-sm-2 control-label">Su Contrase&ntilde;a</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-5">
							<div class="checkbox">
								<label><input type="checkbox"> Recuerdame</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-7">
							<button type="submit" class="btn btn-primary">Accesar</button>
							<button type="reset" class="btn btn-default">Borrar</button>
						</div>
					</div>
			</div>
		</div>
		</form>
		IUTA 2017. All rights reserverd.
		<a href="pages/registrate.php"> Registrate aqui </a>

</html>