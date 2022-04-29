
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<?php 
    include "Navvar.php";

?>

<table>
	<thead>
		<tr>
			<th>Product_id</th>
			<th>Product_name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedUsers as $i => $user): ?>
			<tr>
				<td><a href="showProduct.php?id=<?php echo $user['id'] ?>"><?php echo $user['id'] ?></a></td>
				<td><?php echo $user['Name'] ?></td>
				<td><a href="../EditProduct.php?id=<?php echo $user['id'] ?>">Edit</a>&nbsp<a href="Controler/DeleteProduct.php?id=<?php echo $user['id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>