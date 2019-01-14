<?php
require_once('../mysql_db/connect2db.php');


function modify_usr(){
	// connection to data
	$conn = connecte2data();
	if (!$conn) {
		exit ("Connection failed: " . mysqli_connect_error());
	}
	// check Post correct
	if ($_POST["submit"] == "Modifier son mot de passe" && $_POST["login"] && $_POST["newpw"] && $_POST["oldpw"]){
		// create var of user and pass
		list($login ,$oldpw ,$newpw) = array($_POST["login"], $_POST["oldpw"], $_POST["newpw"]);
		// SQL check line for check
		$check_pass = "SELECT * FROM users WHERE login='$login' AND password=PASSWORD('$oldpw')";
		// check if user exist
		if ($result = mysqli_query($conn, $check_pass)){
			if (mysqli_num_rows($result) == 1){
				// create user on SQL line
				$insert_user = "UPDATE users
								SET password=PASSWORD('$newpw')
								WHERE login='$login'";
				// apply SQL line on database
				if (mysqli_query($conn, $insert_user)){
					header("Location: ../login.html");
					echo ("User password as change\n");
					// send user to home page
				}
				else
					echo ("ERROR\n");
			}
			else
				echo ("User doesn't exist\n");
		}
		// free sql result
    	mysqli_free_result($result);
	}
	else{
		echo ("ERROR\n");
	}
	//close connect mysql
	mysqli_close($conn);
}

modify_usr();
?>