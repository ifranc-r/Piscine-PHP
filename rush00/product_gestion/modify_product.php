<?php
require_once('../mysql_db/connect2db.php');
require_once('delete_product.php');

function modify_product($id){
	// connection to data
	$conn = connecte2data();
	if (!$conn)
		exit ("Connection failed: " . mysqli_connect_error());
	if ($_POST["add"] == "Ajouter un article" && $_POST["name"] && $_POST["price"] && $_POST["sexe"] && $_POST["vetement"]){
		list($name, $price, $sexe, $types, $stock, $describ, $picture) = array($_POST["name"], $_POST["price"], $_POST["sexe"], $_POST["vetement"], $_POST["stock"], $_POST["describ"], $_POST["picture"]);
		delete_product($id);
		$insert_product = "INSERT INTO products (id, name, price, sexe, types, stock, describ, picture)
 							VALUES ('$id','$name', '$price', '$sexe', '$types','$stock', '$describ', '$picture')";
 		if (mysqli_query($conn, $insert_product)){
			echo ("product is create\n");
		}
		else
			echo ("ERROR\n");
	}
	mysqli_close($conn);
}
?>
