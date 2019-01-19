<?php
if (file_exists("list.csv") && isset($_GET["toadd"]) && !empty($_GET["toadd"])){
	$files = file("list.csv", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	$id = sizeof($files);
	file_put_contents("list.csv", "$id;".$_GET["toadd"]."\n", FILE_APPEND | LOCK_EX);
	$files = file("list.csv", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}
?>