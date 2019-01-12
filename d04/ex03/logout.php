<?php
session_start();
if ($_SESSION["loggued_on_user"])
	unset($_SESSION["loggued_on_user"]);
?>