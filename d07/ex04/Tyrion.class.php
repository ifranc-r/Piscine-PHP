<?php
class Tyrion extends Lannister{
	function sleepWith($a){
		if ($a instanceof Lannister)
			print("Not even if I'm drunk !\n");
		else if ($a instanceof Sansa)
			print("Let's do this.\n");
	}
}
?>