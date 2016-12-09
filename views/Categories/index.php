<div class="row">

</div>
<div class="table-responsive col-xs-8 col-md-offset-2 text-center"><h2>Categorias</h2></br>
	<div class="col-xs-4 col-sm-4 col-md-6 col-lg-6">
	</div></br></br>
		<table class="table table-striped table-bordered"> 
			<tr>
				<thead>
					<th class="text-center">ID</th>
					<th class="text-center">Nombre</th>
					<th class="text-center">Editar</th>
					<th class="text-center">Eliminar</th>
				</thead>				
			</tr>
	
		<?php foreach ($categories as $categorie): ?>
		<tr>
			<td><?php echo $categorie["categories"]["id"]; ?></td>
			<td><?php echo $categorie["categories"]["name"]; ?></td>
			<td>

				<?php
					echo $this->Html->link(
						"<span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>", "/categories/edit/".$categorie["categories"]["id"],
						array(
							"title"=>"Editar usuario",
							"target"=>"_blank"
						)
					);
				?>
			</td>
			<td>
				<?php
					echo $this->Html->link(

						"<span class=\"glyphicon icon-cross\" aria-hidden=\"true\"></span>", "/categories/delete/".$categorie["categories"]["id"],
						array(
							"title"=>"Eliminar categoria",
							"target"=>"_self"
						)
						
					);
				?>
				
			</td>
		</tr>
		<?php endforeach; ?>

		</table>
</div>
