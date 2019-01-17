<?php
class NightsWatch implements IFighter{
	private $fighters = [];
	function recruit($a){
		$this->fighters[] = $a;
	}
	function fight() {
		foreach ($this->fighters as $fighters) {
			if ($fighters instanceof IFighter)
				$fighters->fight();
		}
	}
} 
?>