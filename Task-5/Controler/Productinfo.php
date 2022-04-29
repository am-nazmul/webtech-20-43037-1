<?php 

require_once ('Model/Model.php');

function fetchAllProduct(){
	return showAllProducts();

}
function fetchProduct($id){
	return showProduct($id);

}
