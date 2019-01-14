<?php
require_once('./mysql_db/connect2db.php');

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
$all_products = get_all_product();
foreach($all_products as $key => $val){
    if ($val['name'] == $_POST['name']){
        $img = $val['picture']; 
        $price = $val['price']; 
        $desc = $val['describ']; 
        $stock = $val['stock']; 
    }
}
print_r($all_products);
print_r($img);
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gerer le site</title>
    <link rel = "stylesheet"
    type = "text/css"
    href = "back.css" />
</head>
<body>
    <div id="top_bar">
            <a href="index.php">Homepage</a>
    </div>
   
    <div id="full_body">
                    <div class="header">
                             <ul class="menu">
                                <li class="dropdown"><span>Mon compte</span>
                                    <ul class="features-menu">
                                        <li><a href="#">Voir mon compte</a></li>
                                        <li><a href="#">Se deconnecter</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><span>Categories</span>
                                    <ul class="features-menu">
                                        <li><a href="add.html">Ajouter des articles</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><span>Statistiques</span>
                                    <ul class="features-menu">
                                        <li><a href="#">Statistiques utilisateurs</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><span>Contacts</span>
                                    <ul class="features-menu">
                                        <li><a href="#">Messages utilisateurs</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
    <div id="middle-col">
        <div class = "modif_article">
            <p class ="article"> Nom de l'article : </p><br>
            <?php echo '<p class="article">'.$_POST['name'].'</p>';?>
            <?php echo '<img class="article_pict" src="'.$img.'" alt="'.$img.'">';?>
            <?php echo '<p class="article">'.$price.' $</p>';?>
            <?php echo '<p class="article">'.$desc.' $</p>';?><br>
            <p class ="article"> Stock actuel : </p><br>
            <?php echo '<p class="article">'.$stock.'</p>';?>
            

</div>
            <div class="login-page">
                    <div class="form">
                        <form class="login-form" action="modif_product.php" method="POST">
                            <p>Nom de l'article : </p><input type="text" name="name">
                            <p>Categories : </p>Homme<input type="checkbox" name="sexe" value="homme">
                            Femme<br><input type="checkbox" name="sexe" value="femme"> 
                            Chaussures<br><input type="checkbox" name="vetement" value="chaussure">
                            Vestes<br><input type="checkbox" name="vetement" value="veste">
                            Pull <br><input type="checkbox" name="vetement" value="pull">
                            <p>Prix de l'article : </p><input type="number" name="price" min="1" max="999">
                            <p> Lien vers une photo : </p><input type="text" name="picture">
                            <p>Description de l'article : </p><input type="text" name="desc">
                            <p>Quantité</p><input type="number" name="stock" value="qty" min="1" max="50">
                            <input id = "login" target="" type="submit" name="add" value ="Ajouter un article">
                        </form>
                    </div>
                </div>
                
    </div>
</div>
    </body>
</html>                     