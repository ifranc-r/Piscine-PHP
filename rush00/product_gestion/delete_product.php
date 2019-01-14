<?php
require_once('../mysql_db/connect2db.php');

function delete_product($id){
	// connection to data
	$conn = connecte2data();
	if (!$conn)
		exit ("Connection failed: " . mysqli_connect_error());
	$check_product = "SELECT * FROM products WHERE id='$id'";

 	if (mysqli_query($conn, $check_product)){
 		$sql_del_product = "DELETE FROM orders WHERE id=5 AND user='inti'";
		if (mysqli_query($conn, $sql_del_product)){
			echo ("Product is deleted\n");
		}
	}
	else
		echo ("ERROR\n");
	mysqli_close($conn);
}

?>