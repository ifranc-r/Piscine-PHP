#!/usr/bin/php
<?php
if ($argc > 1){
	for($i = 1; $i <= $argc - 1; $i++){
		echo $argv[$i]."\n";
	}
}
?>