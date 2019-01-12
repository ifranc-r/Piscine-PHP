<?php

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


function auth($login, $passwd){
	$file_name = "../private/passwd";
	if (file_exists($file_name)){
		$usr_array_serial = unserialize(file_get_contents($file_name));
		if (($num_usr = check_usr_exist($usr_array_serial, $login)) !== False){
			if (check_good_pswd( $usr_array_serial[$num_usr], $passwd)){
				return TRUE;
			}
		}
	}
	return FALSE;
}

?>