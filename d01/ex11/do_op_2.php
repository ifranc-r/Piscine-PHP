#!/usr/bin/php
<?php
function operation_cal($string){
	foreach (array("-","+","/","*","%") as $calc){
		for ($i = 0; $i <= strlen($string); $i++){
		 	if ($string[$i] == $calc){
		 		return $calc;
		 	}
		 }
	}
	return (null);
}
if ($argc == 2 || $argv[1] == ""){
	$operation = str_replace(" ", "", $argv[1]);
	$cal = operation_cal($operation);
	if ($cal == null){
		echo "Syntax Error\n";
		exit(1);
	}
	$operation = explode($cal, $operation);
	if (!is_numeric($operation[0]) && !is_numeric($operation[1]) || count($operation) != 3){
		echo "Syntax Error\n";
		exit(1);
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