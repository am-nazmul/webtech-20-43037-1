<?php

require_once '../Model/Model.php';

if (isset($_POST['find'])) {
	
		echo $_POST['id'];

    try {
    	
    	$allSearchedUsers = searchProduct($_POST['id']);
    	require_once '../showSearchedProduct.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

