<?php
class Jaime extends Lannister{
	function sleepWith($a){
		if (get_parent_class($this) == get_parent_class($a)) {
			if (get_class($a) == "Cersei")
				print("With pleasure, but only in a tower in Winterfell, then.\n");
			else
				print("Not even if I'm drunk !\n");
		}
		else
			print("Let's do this.\n");
	}
}
?>