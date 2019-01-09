#!/usr/bin/php
<?php
if ($argc == 4){
	list($n1, $oper, $n2) = array_map('trim', array($argv[1], $argv[2], $argv[3]));
	switch ($oper) {
		case '+':
			echo $n1 + $n2;
			break;
		case '-':
			echo $n1 - $n2;
			break;
		case '*':
			echo $n1 * $n2;
			break;
		case '/':
			echo $n1 / $n2;
			break;
		case '%':
			echo $n1 % $n2;
			break;
	}
	echo "\n";
}
else{
	echo "Incorrect Parameters\n";
}
?>