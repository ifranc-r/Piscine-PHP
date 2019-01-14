<?php
//delete ancien et cree un nouveau]

function delete_db($conn, $db){
	$sql = "DROP DATABASE $db;";
	$req = mysqli_query($conn, $sql);
	var_dump(mysqli_error($conn));
}

function create_db($conn, $db){
	$sql = "CREATE DATABASE $db;";
	$req = mysqli_query($conn, $sql);
	var_dump(mysqli_error($conn));
}

?>