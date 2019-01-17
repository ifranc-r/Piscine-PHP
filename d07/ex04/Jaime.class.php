<?php
class Jaime extends Lannister {
	public function sleepWith($a){
		if ($a instanceof Cersei){
			print("With pleasure, but only in a tower in Winterfell, then.\n");
		}
		else if ($a instanceof Lannister){
			print("Not even if I'm drunk !\n");
		}
		else if ($a instanceof Sansa){
			print("Let's do this.\n");
		}
	}
}
?>