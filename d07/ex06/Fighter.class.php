<?php
class Fighter{
	private $_fighter_type = "";
	function __construct($class_name){
		$this->_fighter_type = $class_name;
	}
	function get_type_fighter(){return $this->_fighter_type;}
}
?>