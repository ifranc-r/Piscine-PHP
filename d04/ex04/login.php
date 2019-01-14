<?php
include("auth.php");

function ft_is_null($var){
	return ($var !== NULL && $var !== FALSE && $var !== '');
}

function log_in_session($login, $passwd){
	if (auth($login, $passwd)){
		$user = array("login"=>$login, "passwd"=>hash("whirlpool", $passwd));
		session_start();
		$_SESSION["loggued_on_user"] = $user;
		return true;

	}
	else
		return false;
}

function main(){
	session_start();
	$val_id= ""; $val_pwd= "";
	if (ft_is_null($POST["login"]) && ft_is_null($POST["passwd"]) && $POST["submit"] === "OK"){
		if (log_in_session($POST["login"], $POST["passwd"])){
			echo ("
				<!DOCTYPE html>
				<html>
				<head>
				<meta charset=\"UTF-8\">
				<title>42Chat</title>
				</head>
				</html>
				</body>
				<iframe id=\"chat\" title=\"chat\" width=\"100%\" height=\"550\"></iframe>
				<iframe id=\"chat\" title=\"chat\" width=\"100%\" height=\"50\"></iframe>
				</body>
				</html>");
		}
		else
		{
			header('Location: index.html');
			echo "ERROR\n";
		}
	}
}

main();
?>