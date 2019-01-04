#!/usr/bin/php
<?php
if ($argc == 4){
	$operation = array($argv[1], $argv[2], $argv[3]);
	$operation = array_map('trim', $operation);
	switch ($operation[1]) {
		case '+':
			echo $operation[0] + $operation[2];
			break;
		case '-':
			echo $operation[0] - $operation[2];
			break;
		case '*':
			echo $operation[0] * $operation[2];
			break;
		case '/':
			echo $operation[0] / $operation[2];
			break;
		case '%':
			echo $operation[0] % $operation[2];
			break;
	}
	echo "\n";
}
else{
	echo "Incorrect Parameters\n";
}
?>