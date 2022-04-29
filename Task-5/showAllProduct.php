<?php  
require_once 'Controler/Productinfo.php';

$product = fetchAllProduct();


    include "Navvar.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Buying Price</th>
			<th>Selling Price</th>
		
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($product as $i => $user): ?>
			<tr>
				<td><a href="../showProduct.php?id=<?php echo $user['id'] ?>"><?php echo $user['Name'] ?></a></td>
				<td><?php echo $user['Buy'] ?></td>
				<td><?php echo $user['Sell'] ?></td>
				
				<td><img width="100px" src="Uploads/<?php echo $user['image'] ?>" alt="<?php echo $user['Name'] ?>"></td>
				<td><a href="../EditProduct.php?id=<?php echo $user['id'] ?>">Edit </a>&nbsp <a href="../Controler/DeleteProduct.php?id=<?php echo $user['id'] ?>" >Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>