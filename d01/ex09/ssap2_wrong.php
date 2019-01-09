#!/usr/bin/php
<?php
function print_array2d($array2d){
	foreach ($array2d as $array) {
		foreach ($array as $value){
			echo $value."\n";
		}
	}
}

function sort_array_2d($array2d){
	foreach ($array2d as $array){
		natcasesort($array);
	}
}
if ($argc > 1){
	$fusion_array = array();
	for($i = 1; $i <= $argc - 1; $i++){
		$separated_array = explode(' ', $argv[$i]);
		$trimmed_array = array_map('trim', $separated_array);
		$split_array = array_filter($trimmed_array);
		$fusion_array = array_merge($fusion_array, $split_array);
	}
	$array_number = array();
	$array_alpha = array();
	$array_special = array();
	foreach ($fusion_array as $value) {
		if (is_numeric($value)){
			$array_number[] = $value;
			natcasesort($array_number);
		}
		elseif (ctype_alpha($value[0])){
			$array_alpha[] = $value;
			natcasesort($array_alpha);
		}
		else {
			$array_special[] = $value;
			natcasesort($array_special);
		}
	}
	$array_final_sort = array($array_alpha, $array_number, $array_special);
	print_array2d($array_final_sort);
}
?>