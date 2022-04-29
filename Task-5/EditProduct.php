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

 <form action="Controler/UpdateProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $product['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="Buy">Buying Price:</label><br>
  <input value="<?php echo $product['Buy'] ?>" type="text" id="Buy" name="Buy"><br>
  <label for="Sell">Selling Price:</label><br>
  <input value="<?php echo $product['Sell'] ?>" type="text" id="Sell" name="Sell"><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateProduct" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

