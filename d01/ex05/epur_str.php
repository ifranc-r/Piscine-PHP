#!/usr/bin/php
<?php
if ($argc > 1){
	$separated_array = explode(' ', $argv[1]);
	$trimmed_array = array_map('trim', $separated_array);
	$split_array = array_filter($trimmed_array);
	$str_sep_space = implode(" ", $split_array);
	echo $str_sep_space."\n";
}
?>