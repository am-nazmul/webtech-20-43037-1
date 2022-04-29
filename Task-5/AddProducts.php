



<!DOCTYPE html>
<html lang="en">
<head>

<style>
.error {color: #FF0000;}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input</title>
</head>
<body>
    
<?php 
        include "Navvar.php";

     ?>

<form action="Controler/CreateProducts.php" method="post" enctype="multipart/form-data">
 <fieldset>
  <legend>Add Products:</legend>
  <label for="name">Name : </label> 
  <input type="text" name="name" id="name">
  
   <br>
  <label for="buy">Buying Price : </label>
  <input type="text" name="buy" id="buy">
  
  <br>
  <label for="buy">Selling Price : </label>
  <input type="text" name="sell" id="sell">
  <br>
  <label for="image">Image:-</label>
  <input type="file" name="image"><br><br>
  <br>
  <br>
  <input type="submit" name="submit" value="Submit">



 </fieldset>
</form>

</body>
</html>