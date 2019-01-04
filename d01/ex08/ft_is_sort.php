#!/usr/bin/php
<?php
function ft_is_sort($tab){
	$default = $tab;
	sort($tab);
	
	$flag = true;
	foreach($tab as $key=>$value){
	    if ($value!= $default[$key])
	        $flag = false;
	}
	return $flag;
}
?>