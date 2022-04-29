<?php 

require_once '../Model/Model.php';

if (deleteProduct($_GET['name'])) {
    header('Location: ../showAllproduct.php');
}

 ?>