
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo tipo de usuario</title>
		<link rel="stylesheet" href ="<?php echo $layoutParams["route_css"]; ?>/bootstrap.min.css">
</head>
<body>
<div class="col-xs-12 col-sm-8 col-lg-8 col-lg-8 col-sm-offset-3"><div class="col-md-offset-2"><h2>Ingrese los datos</h2></div><br/><br/>
	<form class="form-horizontal" action="<?php echo APP_URL."/types/add"; ?>" method="POST">
		<div class="form-group">
			<label class="col-sm-2 control-label" for="name">Nombre</label>
			<div class="col-sm-6">
				<input class="form-control" type="text" name="name">
			</div>
		</div>
		
		<div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 col-sm-offset-4">
			<button type="submit" class="btn btn-success">Guardar</button>
		</div>
	</form>
</div>