#!/usr/bin/php
<?php
if ($argc > 1){
	$fusion_array = array();
	$separated_array = explode(' ', $argv[1]);
	$trimmed_array = array_map('trim', $separated_array);
	$split_array = array_filter($trimmed_array);
	$fusion_array = array_merge($fusion_array, $split_array);
	$fusion_array_rev = array_reverse($fusion_array);
	$str = implode (" ", $fusion_array_rev);
	echo "$str\n";
}
?>