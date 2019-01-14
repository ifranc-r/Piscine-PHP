<?php

require_once('../mysql_db/connect2db.php');

function get_all_product(){
	$conn = connecte2data();
	if (!$conn)
		exit ("Connection failed: " . mysqli_connect_error());
	$sql = "SELECT * FROM products";
	// check if user exist
	if ($result = mysqli_query($conn, $sql)){
		if (mysqli_num_rows($result) > 0) {
			$all_products = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $all_products;
		} 
		else {
			echo "0 products in database\n";
			return false;
		}
	}
	else{
		echo "error\n";
		return false;
	}
	mysqli_free_result($result);
}
?>