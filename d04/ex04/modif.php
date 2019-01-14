<?php
function ft_is_null($var){
	return ($var !== NULL && $var !== FALSE && $var !== '');
}

function check_usr_exist($array_all_usr, $usr){
	foreach ($array_all_usr as $num_usr => $array_usr) {
		if ($array_usr["login"] == $usr)
			return $num_usr;
	}
	return False;
}

function check_good_pswd($usr_array, $pswd2check){
	return ($usr_array["passwd"] == hash("whirlpool",$pswd2check));
}

function main(){
	$name_file_usr= "../private/passwd";
	if ($_POST["submit"] == "OK" && ft_is_null($_POST["login"]) && ft_is_null($_POST["newpw"]) && ft_is_null($_POST["oldpw"])){
		if (file_exists($name_file_usr)){
			$usr_array_serial = unserialize(file_get_contents($name_file_usr));
			if (($num_usr = check_usr_exist($usr_array_serial, $_POST["login"])) !== False){
				if (check_good_pswd( $usr_array_serial[$num_usr], $_POST["oldpw"])){
					$new_password = hash("whirlpool", $_POST["newpw"]);
					$usr_array_serial[$num_usr]["passwd"] = $new_password;
					file_put_contents($name_file_usr, serialize($usr_array_serial));
					header("Location: index.html");
					echo ("OK\n");
					exit;
				}
			}
		}
	}
	echo ("ERROR\n");
}
main();
?>