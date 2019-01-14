<?php
function ft_is_null($var){
	return ($var !== NULL && $var !== FALSE && $var !== '');
}

function check_usr_exist($array_all_usr, $usr){
	foreach ($array_all_usr as $num_usr => $array_usr) {
		if ($array_usr["login"] == $usr)
			return True;
	}
	return False;
}

function main(){
	$file_dir= "../private";
	$file_usr= "../private/passwd";

	if ($_POST["submit"] == "OK" && ft_is_null($_POST["login"]) && ft_is_null($_POST["passwd"])){
		$user_array = array("login" => $_POST["login"], "passwd" => hash("whirlpool", $_POST["passwd"]));
		if (!file_exists($file_usr)){
			if(!file_exists($file_dir))
				mkdir($file_dir);
			$usr_array_serial[] = $user_array;
			file_put_contents($file_usr, serialize($usr_array_serial));
		}
		else{
			$usr_array_serial = unserialize(file_get_contents($file_usr));
			if (!check_usr_exist($usr_array_serial, $_POST["login"])){
				$usr_array_serial[] = $user_array;
				file_put_contents($file_usr, serialize($usr_array_serial));
			}
			else
				echo ("ERROR\n");
		}
		header("Location: index.html");
		echo ("OK\n");
	}
	else
		echo ("ERROR\n");
}

main();
?>