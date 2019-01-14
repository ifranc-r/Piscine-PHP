<?php

include ("create_tab_db.php");
include ("db_function.php");
include ("connect2db.php");
include ("field_data.php");


function connect_2_mysql()
{
	$username_db = "inti";
	$password_db = "rootme";
	$link_mysql = "localhost:3306";


	$mysqli = mysqli_connect($link_mysql, $username_db, $password_db);
	if (mysqli_connect_errno($mysqli))
	{
		echo "Echec de connexion à la base de données : " . mysqli_connect_error();
		return (NULL);
	}
	return $mysqli;
}

function install_db(){
	$db = "db_rush00";
	$conn = connect_2_mysql();
	delete_db($conn, $db);
	create_db($conn, $db);
	$con_to_db = connecte2data();
	create_tab_usr($con_to_db);
	create_tab_products($con_to_db);
	create_tab_orders($con_to_db);
	field_db_users();
	field_db_products();
}
install_db();
?>