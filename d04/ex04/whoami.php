<?php
session_start();
if ($_SESSION["loggued_on_user"])
	die ($_SESSION["loggued_on_user"]["login"]."\n");
else
	die ("ERROR\n");
?>