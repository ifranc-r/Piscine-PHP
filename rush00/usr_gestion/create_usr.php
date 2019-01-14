<?php
require_once('../mysql_db/connect2db.php');


function create_usr(){
	// connection to data
	$conn = connecte2data();
	if (!$conn) {
		exit ("Connection failed: " . mysqli_connect_error());
	}
	// check Post correct
	if ($_POST["submit"] == "Creer un compte" && $_POST["login"] && $_POST["password"]){
		// create var of user and pass
		list($login, $password) = array($_POST["login"], $_POST["password"]);
		// SQL check line for check
		$check_pass = "SELECT * FROM users WHERE login='$login' AND password=PASSWORD('$password')";
		// check if user exist
		if ($result = mysqli_query($conn, $check_pass)){
			if (mysqli_num_rows($result) == 0){
				// create user on SQL line
				$insert_user = "INSERT INTO users (login, password, admin)
								VALUES ('$login', PASSWORD('$password'), 0)";
				// apply SQL line on database
				if (mysqli_query($conn, $insert_user)){
					header('location: ../index.php');
					echo ("User is create\n");
					// send user to home page
				}
				else
					echo ("ERROR\n");
			}
			else
				echo ("User exist already\n");
		}
		// free sql result
    	mysqli_free_result($result);
	}
	else{
		echo "salut";
		echo ("ERROR\n");
	}
	//close connect mysql
	mysqli_close($conn);
}

create_usr();
?>