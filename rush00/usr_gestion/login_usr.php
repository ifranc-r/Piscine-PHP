<?php
require_once('../mysql_db/connect2db.php');

function login_usr(){
	// connection to data
	$conn = connecte2data();
	if (!$conn) {
		exit ("Connection failed: " . mysqli_connect_error());
	}
    if ($_POST['submit'] == "Se connecter" && $_POST["login"] && $_POST["password"]) {
    			// create var of user and pass
		list($login, $password) = array($_POST["login"], $_POST["password"]);
		// SQL check line for check
		$check_pass = "SELECT * FROM users WHERE login='$login' AND password=PASSWORD('$password')";

		// check if user exist
		if ($result = mysqli_query($conn, $check_pass)){
			if (mysqli_num_rows($result) == 1){
				header('location: ../index.php');
				session_start();
				$_SESSION['login'] = $login;
       			$_SESSION["password"] = $password;
       			echo "User session connected\n";
       			$check_adm = "SELECT * FROM users WHERE login='$login' AND admin=1";
       			if ($result_adm = mysqli_query($conn, $check_adm )){
					if (mysqli_num_rows($result_adm) == 1){
              			$_SESSION['admin'] = 1;
						echo ("User is admin\n");
					}
					else{
              			$_SESSION['admin'] = 0;
						echo ("User is not admin\n");
					}
				}
    			mysqli_free_result($result_adm);
       		}
       	}
    	mysqli_free_result($result);
	}
	else
		echo ("ERROR\n");
	mysqli_close($conn);
}

login_usr();
?>