<?php
function ft_count($array){
	$i = 0;
	foreach ($array as $key => $value) {
		++$i;
	}
	return ($i);
}

if ($_GET){
	if (isset($_GET["action"])){
		switch ($_GET["action"]){
			case 'set':
				if (isset($_GET["name"]) && isset($_GET["value"]) && ft_count($_GET) == 3){
					setcookie($_GET["name"], $_GET["value"], time() + 3600);
				}
				break;
			case 'get':
				if (isset($_COOKIE[$_GET["name"]]))
					echo $_COOKIE[$_GET["name"]]."\n";
				break;
			case 'del':
				setcookie($_GET["name"], "", time()-1000);
				break;
		}
	}
}
?>