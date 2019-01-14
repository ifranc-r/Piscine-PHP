<?php
function ft_is_null($var){
	return ($var !== NULL && $var !== FALSE && $var !== '');
}

function manage_session(&$login, &$passwd){
	session_start();
	if (ft_is_null($_GET["login"]) && ft_is_null($_GET["passwd"]) && $_GET["submit"] === "OK"){
		$_SESSION["login"] = $_GET["login"];
		$_SESSION["passwd"] = $_GET["passwd"];
	}
	if ($_SESSION["login"] && $_SESSION["passwd"]){
		$login = $_SESSION["login"];
		$passwd = $_SESSION["passwd"];
	}
}

function main(){
	$val_id= ""; $val_pwd= "";

	manage_session($val_id, $val_pwd);
	echo ("<html><body>
	<form method=\"GET\">
	Identifiant: <input type=\"text\" name=\"login\" value=\"$val_id\" />
	<br />
	Mot de passe: <input type=\"text\" name=\"passwd\" value=\"$val_pwd\" />
	<input name=\"submit\" type=\"submit\" value=\"OK\"/>
	</form>
	</body></html>\n");
}
main();
?>