<h2>Usuarios</h2>


<table>
	<tr>
		<th>ID</th>
		<th>username</th>
		<th>Password</th>
		<th>Type</th>
		<th>Action</th>
	</tr>

<?php foreach ($users as $user): ?>
<tr>
	<td><?php echo $user["users"]["id"]; ?></td>
	<td><?php echo $user["users"]["username"]; ?></td>
	<td><?php echo $user["users"]["password"]; ?></td>
	<td><?php echo $user["types"]["name"]; ?></td>
	<td>
		<a href="<?php echo APP_URL."/users/edit/".$user["users"]["id"]; ?>">Edit</a>
		<a href="<?php echo APP_URL."/users/delete/".$user["users"]["id"]; ?>">Delete</a>

	</td>
</tr>
<?php endforeach; ?>

</table>