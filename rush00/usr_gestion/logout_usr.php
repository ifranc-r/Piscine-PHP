<?php

function logout(){
	// SQL check line for check
	session_start();
	unset($_SESSION);
	header('location: ../index.php');
	echo "Vous vouvs êtes deconnecté\n";
}

logout();
?>