#!/usr/bin/php
<?php
	$f = fopen( 'php://stdin', 'r' );
	
	while ($f && !feof($f))
	{
		echo "Entrez un nombre: ";
		$line = fgets( $f );
		if ($line){
			$line = trim(str_replace("\n", "", $line));
			if (is_numeric($line)){
				$num = (int)$line;
				if ($num % 2 == 0)
					echo "Le chiffre ". $line . " est un Pair";
				else
					echo "Le chiffre ". $line . " est un Impair";

			}
			else{
				echo "'" . $line . "'" . " n'est pas un chiffre";
			}
			echo "\n";
		}
	}
	fclose( $f );
	echo "\n";
?>
