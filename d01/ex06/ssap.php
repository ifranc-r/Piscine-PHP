#!/usr/bin/php
<?php
function myFilter($var){
  return ($var !== NULL && $var !== FALSE && $var !== '');
}

if ($argc > 1){
	$fusion_array = array();
	for($i = 1; $i <= $argc - 1; $i++){
		$separated_array = explode(' ', $argv[$i]);
		$trimmed_array = array_map('trim', $separated_array);
		$split_array = array_filter($trimmed_array, "myFilter");
		$fusion_array = array_merge($fusion_array, $split_array);
	}
	sort($fusion_array);
	foreach ($fusion_array as $value) {
		echo "$value\n";
	}
}
?>
