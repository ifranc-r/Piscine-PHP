<?php

if ($_SERVER["PHP_AUTH_USER"] == "zaz" && $_SERVER["PHP_AUTH_PW"] == "jaimelespetitsponeys"){
	$img = file_get_contents("../img/42.png");
	$img_in_base64 = base64_encode($img);
	echo ("<html><body>Bonjour Zaz<br /><img src='data:image/png;base64,$img_in_base64'></body></html>\n");
}
else{
	header("HTTP/1.1 401 Unauthorized");
	header("WWW-Authenticate: Basic realm=''Espace membres''");
	echo ("<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n");
	exit;
}
?>