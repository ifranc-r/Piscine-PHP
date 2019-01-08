#!/usr/bin/php
<?php
include("ft_is_sort.php");
$tab = array("5", "a", "b", "c");
// sort($tab);
print_r($tab);

if (ft_is_sort($tab))
	echo "Le tableau est trie\n";
else
	echo "Le tableau n’est pas trie\n";
?>