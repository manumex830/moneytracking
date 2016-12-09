<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio de Sesión</title>
		<link rel="stylesheet" href ="<?php echo $layoutParams["route_css"]; ?>/bootstrap.min.css">
</head>
<body>
<div class="col-xs-12 col-sm-8 col-lg-8 col-lg-8 col-sm-offset-3"><h2>Ingrese los datos</h2><br/><br/>
		<form class="form-horizontal" action="<?php echo APP_URL."/users/add"; ?>" method="POST">
			<div class="form-group">
				<label class="col-sm-2 control-label" for="username">Nombre de usuario</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="username">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="password">Contraseña</label>
				<div class="col-sm-6">
					<input class="form-control" type="password" name="password">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="type_id">Type</label>
				<div class="col-sm-6">
					<select class="form-control" name="type_id" id="type_id">
					<?php 
						foreach ($types as $type):
					 ?>
						<option value = "<?php echo $type["types"] ["id"]; ?>">
							<?php 
								echo $type["types"] ["name"];
							 ?>
						</option>
					<?php 
						endforeach 
					?>
					</select>
				</div>
			</div>
			<div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 col-sm-offset-4">
				<button type="submit" class="btn btn-success">Guardar</button>
			</div>
		</form>