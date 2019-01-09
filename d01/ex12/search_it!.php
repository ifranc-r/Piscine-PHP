#!/usr/bin/php
<?php
if ($argc > 1){
	$key = $argv[1];
	$keyparam = array();
	for($i = 2; $i <= $argc - 1; $i++){
		if (!strpos($argv[$i], ':'))
			exit(-1);
		$array_key_val = explode(':', $argv[$i]);
		if (count($array_key_val) != 2)
			exit(-1);
		$keyparam[$array_key_val[0]] = $array_key_val[1];
	}
	if (array_key_exists($key, $keyparam))
		echo $keyparam[$key]."\n";
	else
		exit(0);
}
?>