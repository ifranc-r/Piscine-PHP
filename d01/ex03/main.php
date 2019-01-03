#!/usr/bin/php
<?php
	include("ft_split.php");
	$f = fopen( 'php://stdin', 'r' );
	
	while ($f && !feof($f))
	{
		echo "Entrez une sting : ";
		$line = fgets( $f );
		print_r(ft_split($line));
		echo "\n";
	}

	fclose( $f );
	echo "\n";
?>