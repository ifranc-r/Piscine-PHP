#!/usr/bin/php
<?php

// function clear_string_S_and_E($str, $c){
// 	$start = 0;
// 	$end = strlen($str);
// 	if ($str[$start] == $c){
// 		for ($i = 0; $str[$i] == $c; ++$i) {
// 		}
// 		$start = $i;
// 	}
// 	if ($str[$end] == $c){
// 		for ($i = $end; $str[$i] == $c; --$i) {
// 		}
// 		$end = $i;
// 	}
// 	if ($end != 0)
// 	{
// 		$clear_str = '';
// 		$a = 0;
// 		for ($i = $start; $i < $end; ++$i){
// 			$clear_str[$a] = $str[$ig];
// 			++$a;
// 		}
// 	}
// }

// function count_space($str, $c){
// 	$num_char = 0;
// 	for ($i = 0; $i < strlen($str); ++$i) {
// 		if ($str[$i] == $c){
// 			++$num_char;
// 			while ($str[$i] == $c)
// 				++$i;
// 		}
// 	}
// 	return $num_char;
// }

function ft_split($str){
	$separated_array = explode(' ', $str);
	$trimmed_array = array_map('trim', $separated_array);
	$split_array = array_filter($trimmed_array);
	sort($split_array);
	return $split_array;
}
?>