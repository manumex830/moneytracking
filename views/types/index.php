

<div class="table-responsive col-xs-8 col-md-offset-2 text-center"><h2>Tipos de usuarios</h2></br>
	<div class="col-xs-4 col-sm-4 col-md-6 col-lg-6">

			<a href="<?php echo APP_URL."/types/add/";?>">
			<button class="btn btn-success"><span class="icon-user-tie"></span> Nuevo tipo usuario</button>
			</a>
	</div></br></br>
<table class="table table-striped table-bordered">
	<tr>
		<thead>
			<th class="text-center">Id</th>
			<th class="text-center">Name</th>
			<th class="text-center">Editar</th>
			<th class="text-center">Eliminar</th>
		</thead>
	</tr>

<?php foreach ($types as $type): ?>
	<tr>
		<td><?php echo $type["types"]["id"]; ?></td>
		<td><?php echo $type["types"]["name"]; ?></td>
		<td>
			<?php 
				echo $this->Html->link(
					"<span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>", "/types/edit/".$type["types"]["id"],	
					array(
						"title"=>"Editar tipo de usuario",
						"target"=>"_self"
					)
				);
			?>
		</td>
		<td>
			<?php
				echo $this->Html->link(
					"<span class=\"glyphicon icon-cross\" aria-hidden=\"true\"></span>", "/types/delete/".$type["types"]["id"],
					array(
						"title"=>"Eliminar tipo de usuario",
					)
				);
			?>

		</td>
	</tr>
	<?php endforeach; ?>

	</table>
</div>