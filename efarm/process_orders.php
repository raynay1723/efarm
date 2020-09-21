<?php
require_once 'config.php';

echo $product_id = $_GET['prod_id'];
$buyer_id = 12345678;



if(!empty($product_id)){
	if(mysqli_query($link,"INSERT INTO buyer_orders VALUES('','$product_id','$buyer_id',CURRENT_TIMESTAMP)")){
		echo "ORDER MADE";
	}else{
		echo "INSERT ERR";
	}
}





?>