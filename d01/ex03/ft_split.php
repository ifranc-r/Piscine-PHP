<?php
function myFilter($var){
  return ($var !== NULL && $var !== FALSE && $var !== '');
}

function ft_split($str){
	$separated_array = explode(' ', $str);
	$trimmed_array = array_map('trim', $separated_array);
	$split_array = array_filter($trimmed_array, "myFilter");
	sort($split_array);
	if (!empty($split_array))
		return $split_array;
}
?>
