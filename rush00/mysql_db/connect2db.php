<?php

function connecte2data(){
	$username_db = "inti";
	$password_db = "rootme";
	$link_mysql = "localhost:3306";
	$db = "db_rush00";

	$mysqli = mysqli_connect($link_mysql, $username_db, $password_db, $db);
	if (mysqli_connect_errno($mysqli))
	{
		echo "Echec de connexion à la base de données : " . mysqli_connect_error();
		return (NULL);
	}
	return $mysqli;
}

?>