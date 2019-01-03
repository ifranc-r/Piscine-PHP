#!/usr/bin/php
<?php
	$a = 100;
	for ($i=0; $i < 1000; $i++) { 
		echo "X";
		if ($a == 0){
			echo "\n";
			$a = 101;
		}
		$a--;
	}
	echo "\n";
?>