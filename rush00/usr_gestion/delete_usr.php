<?php
require_once('../mysql_db/connect2db.php');


function delete_user(){
	// connection to data
	$conn = connecte2data();
	if (!$conn) {
		exit ("Connection failed: " . mysqli_connect_error());
	}
	// check Post correct
	if ($_POST["submit"] == "OK" && $_POST["login"] && $_POST["password"]){
		// create var of user and pass
		list($login, $password) = array($_POST["login"], $_POST["password"]);
		// SQL check line for check
		$check_pass = "SELECT * FROM users WHERE login='$login' AND password=PASSWORD('$password')";
		// check if user exist
		if ($result = mysqli_query($conn, $check_pass)){
			if (mysqli_num_rows($result) == 1){
				// create user on SQL line
				$del_user = "DELETE FROM table_name
								WHERE $login;";
				// apply SQL line on database
				header('location: ../index.php');

				if (mysqli_query($conn, $del_user)){
					echo ("User is deleted\n");
					// send user to home page
					// header("Location: index.html")
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
	else
		echo ("ERROR\n");
	//close connect mysql
	mysqli_close($conn);
}

delete_user();
?>