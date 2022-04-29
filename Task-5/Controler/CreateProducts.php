
<?php  
require_once '../Model/Model.php';


if (isset($_POST['submit'])) {
	$data['name'] = $_POST['name'];
	$data['buy'] = $_POST['buy'];
	$data['sell'] = $_POST['sell'];
	
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../Uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
	

  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (addProduct($data)) {
  	echo 'Successfully added!!';

	
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>