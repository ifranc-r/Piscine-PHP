#!/usr/bin/php
<?php
function myFilter($var){
  return ($var !== NULL && $var !== FALSE && $var !== '');
}

if ($argc > 1){
	$separated_array = explode(' ', $argv[1]);
	$trimmed_array = array_map('trim', $separated_array);
	$split_array = array_filter($trimmed_array, "myFilter");
	$str_sep_space = implode(" ", $split_array);
	if ($str_sep_space !== "")
		echo $str_sep_space."\n";
}
?>