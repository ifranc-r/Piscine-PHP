<?php
require_once('../mysql_db/connect2db.php');

function create_product(){
	// connection to data
	$conn = connecte2data();
	if (!$conn)
		exit ("Connection failed: " . mysqli_connect_error());
	print_r($_POST);
	if ($_POST["add"] == "Ajouter un article" && $_POST["name"] && $_POST["price"] && $_POST["sexe"] && $_POST["vetement"]){
		list($name, $price, $sexe, $types, $stock, $describ, $picture) = array($_POST["name"], $_POST["price"], $_POST["sexe"], $_POST["vetement"], $_POST["stock"], $_POST["describ"], $_POST["picture"]);
		$insert_product = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
 							VALUES ('$name', '$price', '$sexe', '$types','$stock', '$describ', '$picture')";
 		if (mysqli_query($conn, $insert_product)){
			echo ("product is create\n");
		}
		else
			echo ("ERROR\n");
	}
	mysqli_close($conn);
}
create_product();
?>
