#!/usr/bin/php
<?php

function ft_strlen($str)
{
	$i = 0;
	while ($str[$i] || $str[$i]==="0")
		$i++;
	return ($i);
}

function myFilter($var){
	return ($var !== NULL && $var !== FALSE && $var !== '');
}

function mySortFunct($a, $b){
	$MySortChar = "abcdefghijklmnopqrstuvwxyz0123456789 !\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	$sort_len = (ft_strlen($a) < ft_strlen($b))? ft_strlen($a) : ft_strlen($b);
	for ($i = 0; $i < $sort_len; $i++) {
		$a_pos_sort = strpos($MySortChar, strtolower($a[$i]));
		$b_pos_sort = strpos($MySortChar, strtolower($b[$i]));
		if ($a_pos_sort != $b_pos_sort){
			return ($a_pos_sort < $b_pos_sort)? -1 : 1;
		}
	}
	return (0);
}

if ($argc > 1){
	$fusion_array = array();
	for($i = 1; $i <= $argc - 1; $i++){
		$separated_array = explode(' ', $argv[$i]);
		$trimmed_array = array_map('trim', $separated_array);
		$split_array = array_filter($trimmed_array, "myFilter");
		$fusion_array = array_merge($fusion_array, $split_array);
	}
	usort($fusion_array, "mySortFunct");
	foreach ($fusion_array as $value) {
		echo "$value\n";
	}
}
?>
