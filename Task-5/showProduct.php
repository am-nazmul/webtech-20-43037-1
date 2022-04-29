<?php  
require_once 'Controler/Productinfo.php';

$product = fetchProduct($_GET['id']);


    include "Navvar.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Buying Price</th>
		<th>Selling Price</th>
		
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $product['id'] ?>"><?php echo $product['Name'] ?></a></td>
		<td><?php echo $product['Buy'] ?></td>
		<td><?php echo $product['Sell'] ?></td>
		
		<td><img width="100px" src="Uploads/<?php echo $product['image'] ?>" alt="<?php echo $product['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>