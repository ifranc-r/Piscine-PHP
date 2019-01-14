<?php

require_once('../mysql_db/connect2db.php');

function field_db_products()
{
	$conn = connecte2data();
	if (!$conn)
		exit ("Connection failed: " . mysqli_connect_error());
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('belle chaussure femme', '40', 'femme', 'chaussures','30', 'belle chaussures de sport', './img/basket femme rouge.jpg')";
	mysqli_query($conn, $field);

	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('belle chaussure beige', '40', 'femme', 'chaussures','30', 'belle chaussures de sport', './img/chaussures femme beige.jpg')";
	mysqli_query($conn, $field);
		$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('belle chaussure 2', '40', 'femme', 'chaussures','30', 'belle chaussures de sport', './img/chaussures femme noir.jpg')";
	mysqli_query($conn, $field);
		$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('belle chaussure 3', '40', 'homme', 'chaussures','30', 'belle chaussures de sport', './img/chaussures homme grises.jpg')";
	mysqli_query($conn, $field);

	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('belle chaussure homme', '40', 'homme', 'chaussures','30', 'belle chaussures', './img/chelsea homme.jpg')";
	mysqli_query($conn, $field);

	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('belle doudoune', '40', 'femme', 'vestes','30', 'belle chaussure de sport', './img/doudoune femme.jpg')";
	mysqli_query($conn, $field);
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('doudoune', '40', 'homme', 'vestes','30', 'doudoune de sport', './img/doudoune-homme-navy-brodee.jpg')";
	mysqli_query($conn, $field);
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('parka', '40', 'homme', 'vestes','20', 'parka', './img/parka homme.jpg')";
	mysqli_query($conn, $field);
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('chaussure differente', '40', 'homme', 'chaussures','30', 'belle chaussure de sport', './img/vans homme.jpg')";
	mysqli_query($conn, $field);
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('pull de fou', '40', 'homme', 'pull','30', 'pull noir homme', './img/pull homme noir.jpg')";
	mysqli_query($conn, $field);
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('pull du riche', '40', 'femme', 'pull','30', 'pull tres tres moche', './img/pull homme gris.jpg')";
	mysqli_query($conn, $field);
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('chaussures cozy', '40', 'femme', 'chaussures','30', 'belle chaussure de sport', './img/vans femme rouge.jpg')";
	mysqli_query($conn, $field);
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('sneakers femelle', '40', 'homme', 'chaussures','30', 'belle chaussure de sport', './img/chaussures femme noir.jpg')";
	mysqli_query($conn, $field);
}

function field_db_users()
{
	$conn = connecte2data();
	if (!$conn)
		exit ("Connection failed: " . mysqli_connect_error());
	$field = "INSERT INTO USERS (login, password, admin)
					VALUES ('inti', PASSWORD('inti'), 0)";
	mysqli_query($conn, $field);
	$field = "INSERT INTO USERS (login, password, admin)
					VALUES ('joseph', PASSWORD('joseph'), 0)";
	mysqli_query($conn, $field);
}
?>