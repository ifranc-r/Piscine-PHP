<?php
require_once('../mysql_db/connect2db.php');

function delete_order(){
	// connection to data
	$conn = connecte2data();
	if (!$conn)
		exit ("Connection failed: " . mysqli_connect_error());
	if ($_POST["submit"] == "Ajouter une commande" && $_POST["id_order"] && $_POST["num_product"]){

		// session_start();
		// $usr = $_SESSION['login'];
		$id = $_POST["id_order"];
		$num_product = $_POST["num_product"]
		$usr = "inti";
	 	$sql_del_order = "DELETE FROM orders WHERE id=$id AND user='$usr'";
	 	$insert_product = "INSERT INTO orders (user, id_product, num_product)
 							VALUES ('$usr', $id, $num_product)";
		// print_r($_POST);
		if (mysqli_query($conn, $sql_del_order))
			echo ("Order is deleted\n");
		}
	mysqli_close($conn);
}

?>