#!/usr/bin/php
<?php
if ($argc > 1){
	$fusion_array = array();
	unset($argv[0]);
	foreach($argv as $v){
		echo $v."\n";
	}
}
?>