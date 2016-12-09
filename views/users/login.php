<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio de Sesión</title>
		<link rel="stylesheet" href ="<?php echo $layoutParams["route_css"]; ?>/bootstrap.min.css">
</head>
<body>

<br/><br/><br/><br/><div class="col-md-4 col-sm-offset-5"><h3>Inicio de sesión</h3></div><br/><br/>

<div class="col-xs-12 col-sm-8 col-lg-8 col-lg-8 col-sm-offset-3"><br/><br/>

	<form class="form-horizontal" action="<?php echo APP_URL."/users/login"; ?>" method="POST">
	  <div class="form-group">
	    <label for="username" class="col-sm-2 control-label">Usuario</label>
	    <div class="col-sm-6">
	      <input class="form-control" type="text" name="username">
	    </div>
	  </div>
	  <div class="form-group">
	    <label  for="password" class="col-sm-2 control-label">Contraseña</label>
	    <div class="col-sm-6">
	      <input type="password" class="form-control" type="password" name="password">
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-6">
	      <button type="submit" class="btn btn-default">Enviar</button>
	    </div>
	  </div>
	</form>
</div>