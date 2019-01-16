<?php
class NightsWatch{
	function recruit($a){
		if (array_key_exists("IFighter",class_implements($a)))
			$a->fight();
	}
	function fight() {}
} 
?>