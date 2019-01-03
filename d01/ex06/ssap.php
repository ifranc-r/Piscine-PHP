#!/usr/bin/php
<?php
if ($argc > 1){
	$fusion_array = array();
	for($i = 1; $i <= $argc - 1; $i++){
		$separated_array = explode(' ', $argv[$i]);
		$trimmed_array = array_map('trim', $separated_array);
		$split_array = array_filter($trimmed_array);
		$fusion_array = array_merge($fusion_array, $split_array);
	}
	sort($fusion_array);
	foreach ($fusion_array as $value) {
		echo "$value\n";
	}
}
?>