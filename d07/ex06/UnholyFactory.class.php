<?php
class UnholyFactory {
	private $_array_absorb = [];
	function absorb($f){
		if (get_parent_class($f) == "Fighter"){
			if (!array_key_exists($f->get_type_fighter(), $this->_array_absorb)){
				$this->_array_absorb[$f->get_type_fighter()] = $f;
				print("(Factory absorbed a fighter of type ".$f->get_type_fighter().")\n");
			}
			else
				print("(Factory already absorbed a fighter of type ".$f->get_type_fighter().")\n");
		}
		else
			print("(Factory can't absorb this, it's not a fighter)\n");
	}
	function fabricate($request_type_f){
		if (array_key_exists($request_type_f, $this->_array_absorb)){
			print ("(Factory fabricates a fighter of type ".$request_type_f.")\n");
			return $this->_array_absorb[$request_type_f];
		}
		else
			print ("(Factory hasn't absorbed any fighter of type ".$request_type_f.")\n");
	}
	function array_absorbe(){
		print_r($this->_array_absorb);
	}
}


?>