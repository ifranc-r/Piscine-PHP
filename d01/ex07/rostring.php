#!/usr/bin/php
<?php
function myFilter($var){
  return ($var !== NULL && $var !== FALSE && $var !== '');
}
if ($argc > 1){
	$fusion_array = array();
	$separated_array = explode(' ', $argv[1]);
	$trimmed_array = array_map('trim', $separated_array);
	$split_array = array_filter($trimmed_array, "myFilter");
	$fusion_array = array_merge($fusion_array, $split_array);
	$fusion_array_rev = array_reverse($fusion_array);
	$str = implode(" ", $fusion_array_rev);
	echo "$str\n";	
}
?>