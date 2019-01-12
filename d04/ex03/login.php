<?php
include("auth.php");

function ft_is_null($var){
	return ($var !== NULL && $var !== FALSE && $var !== '');
}

function log_in_se($login, $passwd){
	if (auth($login, $passwd)){
		$user = array("login"=>$login, "passwd"=>hash("whirlpool", $passwd));
		session_start();
		$_SESSION["loggued_on_user"] = $user;
		// print_r($_SESSION);
		die ("OK\n");
	}
	die ("ERROR\n");
}

function main(){
	session_start();
	$val_id= ""; $val_pwd= "";
	if (ft_is_null($_GET["login"]) && ft_is_null($_GET["passwd"])){
		log_in_se($_GET["login"], $_GET["passwd"]);
	}
}

main();
?>