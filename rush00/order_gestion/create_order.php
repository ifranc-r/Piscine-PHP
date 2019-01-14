<?
require_once('../mysql_db/connect2db.php');

function create_product(){
	// connection to data
	$conn = connecte2data();
	if (!$conn)
		exit ("Connection failed: " . mysqli_connect_error());
	print_r($_POST);
	if ($_POST["submit"] == "Ajouter une commande"){
		// session_start();
		// $usr = $_SESSION['login'];
		// $array_shop_card = get_products_shop_card();
		$usr = "joseph";
		$array_shop_card = [];
		$order = array("id" => 5, "num_product" => 2);
		foreach ($array_shop_card as $products){
			$id = $products['id'];
			$num_product = $products["num_product"];
			$insert_product = "INSERT INTO orders (user, id_product, num_product)
 							VALUES ('$usr', $id, $num_product)";
	 		if (!mysqli_query($conn, $insert_product))
				echo ("ERROR\n");
 		}
	}
	mysqli_close($conn);
}
create_product();

?>