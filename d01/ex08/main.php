#!/usr/bin/php
<?php
include("ft_is_sort.php");
$tab = array("1" , "2", "3", "a");
// sort($tab);
print_r($tab);

if (ft_is_sort($tab))
	echo "Le tableau est trie\n";
else
	echo "Le tableau n’est pas trie\n";
?>
