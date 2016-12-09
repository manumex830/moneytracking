<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio de Sesión</title>
		<link rel="stylesheet" href ="<?php echo $layoutParams["route_css"]; ?>/bootstrap.min.css">
</head>
<body>

<div class="col-xs-12 col-sm-8 col-lg-8 col-lg-8 col-sm-offset-3"><h2>Modifique los datos</h2><br/><br/>
<form class="form-horizontal" action="<?php echo APP_URL."/users/edit"; ?>"	method="POST">
		<input type= "hidden" name="id" value = "<?php echo $user["id"]; ?>">
	<div class="form-group">	
		<label class="col-sm-2 control-label" for="username">Username</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="username" value = "<?php echo $user["username"]; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" for="NewPassword">Password</label>
		<div class="col-sm-6">
			<input class="form-control" type="password" name="NewPassword">
		</div>
	</div>
	<div class="form-group">	
		<label class="col-sm-2 control-label" for="type_id">Type</label>
		<div class="col-sm-6">
			<select class="form-control" name="type_id" id="type_id">
				<?php 
				foreach ($types as $type):
					if ($type["types"]["id"]==$user["type_id"]) { ?>
						<option selected value = "<?php echo $type["types"] ["id"]; ?>">
							<?php echo $type["types"] ["name"]; ?>
						</option>
					<?php 
					}else{ ?>
						<option value = "<?php echo $type["types"] ["id"]; ?>">
							<?php echo $type["types"] ["name"]; ?>
						</option>
					<?php 
					}  
				?>
				 				
				<?php 
				endforeach 
				?>
			</select>
		</div>

	</div>
	<div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 col-sm-offset-4">
		<button type="submit" class="btn btn-success" >Enviar</button>

	</div>
</form>
</div>