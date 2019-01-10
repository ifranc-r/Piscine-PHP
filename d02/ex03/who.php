#!/usr/bin/php
<?php
if (($f = file_get_contents("/var/run/utmpx"))){
	print_r($f);
	
}
?>