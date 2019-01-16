<?php
class Targaryen
{
	function getBurned(){
		if (static::resistsFire())
			return "burns alive";
		else
			return "emerges naked but unharmed";

	}
	public function resistsFire() {
		return False;
	}
}
?>