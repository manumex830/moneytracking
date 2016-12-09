<div class="row">
	
</div>


<div class="table-responsive col-xs-8 col-md-offset-2 text-center"><h2>Usuarios</h2></br>
	<div class="col-xs-4 col-sm-4 col-md-6 col-lg-6">
			<?php foreach ($users as $user): ?>
			<a href="<?php echo APP_URL."/users/add/".$user["users"]["id"]; ?>">
			<?php endforeach; ?>
			<button class="btn btn-success"><span class="icon-user-plus"></span> Crear nuevo</button>
			</a>
			
	</div></br></br>
	<table class="table table-striped table-bordered"> 
		<tr>
			<thead>
				<th class="text-center">ID</th>
				<th class="text-center">Usuario</th>
				<th class="text-center">Tipo de usuario</th>
				<th class="text-center">Editar</th>
				<th class="text-center">Eliminar</th>
			</thead>
		</tr>

	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user["users"]["id"]; ?></td>
		<td><?php echo $user["users"]["username"]; ?></td>
		<td><?php echo $user["types"]["name"]; ?></td>
		<td>

			<?php
				echo $this->Html->link(
					"<span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>", "/users/edit/".$user["users"]["id"],
					array(
						"title"=>"Editar usuario",
						"target"=>"_self"

					)
				);
			?>
		</td>
		<td>
			<?php
				echo $this->Html->link(
					
					"<span class=\"glyphicon icon-cross\" aria-hidden=\"true\"></span>", "/users/delete/".$user["users"]["id"]
					
				);
			?>
			
		</td>
	</tr>
	<?php endforeach; ?>

	</table>
</div>
