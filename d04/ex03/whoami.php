<?php
session_start();
if ($_SESSION["loggued_on_user"])
	echo ($_SESSION["loggued_on_user"]["login"]."\n");
else
	echo ("ERROR\n");
?>