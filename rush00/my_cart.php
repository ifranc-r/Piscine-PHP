<?php 
session_start();
require_once('./mysql_db/connect2db.php');
 $conn = connecte2data();
if (!$conn) {
    exit("Connection failed: " . mysqli_connect_error());
}

$check_price = "SELECT price FROM products";
$check_name = "SELECT name FROM products";
$check_type = "SELECT types FROM products";
$check_picture = "SELECT picture FROM products";
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mon panier</title>
    <link rel = "stylesheet"
    type = "text/css"
    href = "style.css" />
</head>
<body>
    <div id="top_bar">
    </div>
    <div id="full_body">
        
                    <div class="header">
                            <ul class="menu">
                                <li class="dropdown"><span>Mon compte</span>
                                    <ul class="features-menu">
                                        <li><a href="login.html">Se connecter</a></li>
                                        <li><a href="#">Voir mon compte</a></li>
                                        <li><a href="#">Se deconnecter</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><span>Categories</span>
                                    <ul class="features-menu">
                                        <li><a href="#">Hallu</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><span>Mon panier</span>
                                    <ul class="features-menu">
                                        <li><a href="cart.php">Voir mes articles</a></li>
                                        <li><a href="#">Commander</a></li>
                                    </ul>
                                </li>
                                <?php if ($_SESSION['admin'] === 1) : ?>
                                    <li class='dropdown'><span>Back-end</span><ul class='features-menu'><li><a href="back.html">Gestion admin</a></li></ul></li>
                                    <?php endif; ?>        
                                </ul>
                                </li>
                        </div>
                        
    <!-- <div id="left-col">
            <a href="#">Categorie 1</a>
            <a href="#">Categorie 2</a>
            <a href="#">Categorie 3</a>
            <a href="#">Categorie 4</a>
            <a href="#">Categorie 5</a>
    </div>
     -->
    <div id="middle-col">
    <div class="form">
                        <form class="login-form" action="cart_gestion/manage_cart.php" method="POST">
                        <input id = "login" type="submit" name="submit" value ="Supprimer mon panier">
                
                                </form>
                                </div>
    </div>
<!--     
    <div id="right-col">
    </div> -->
    </body>
</html>                     