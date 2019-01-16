<?php
class Tyrion extends Lannister{
	function sleepWith($a){
		if (get_parent_class($this) == get_parent_class($a)) {
			print("Not even if I'm drunk !\n");
		}
		else
			print("Let's do this.\n");
	}
}
?>