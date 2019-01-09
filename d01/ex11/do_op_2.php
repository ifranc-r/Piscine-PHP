#!/usr/bin/php
<?php

function ft_strlen($str)
{
  $i = 0;
  while ($str[$i] || $str[$i] === "0")
     $i++;
  return ($i);
}

function operation_cal($string){
	foreach (array("-","+","/","*","%") as $calc){
		for ($i = 0; $i <= ft_strlen($string); $i++){
		 	if ($string[$i] == $calc){
		 		return $calc;
		 	}
		 }
	}
	return (null);
}
if ($argc == 2){
	$cal = operation_cal($argv[1]);
	if ($cal == null){
		echo "Syntax Error\n";
		exit(-1);
	}
	$operation = explode($cal, $argv[1]);
	$operation = array_map("trim", $operation);
	if (!is_numeric($operation[0]) || !is_numeric($operation[1]) || count($operation) != 2){
		echo "Syntax Error\n";
		exit(-1);
	}
	switch ($cal) {
		case '+':
			echo $operation[0] + $operation[1];
			break;
		case '-':
			echo $operation[0] - $operation[1];
			break;
		case '*':
			echo $operation[0] * $operation[1];
			break;
		case '/':
			echo $operation[0] / $operation[1];
			break;
		case '%':
			echo $operation[0] % $operation[1];
			break;
	}
	echo "\n";
}
else{
	echo "Incorrect Parameters\n";
}
?>
