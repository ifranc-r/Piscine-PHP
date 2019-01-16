<?php
require_once("../ex00/Color.class.php");

Class Vertex {
	private $_x = 0.0;
	private $_y = 0.0;
	private $_z = 0.0;
	private $_w = 1.0;
	private $_color;

	public static $verbose = false;

	function __construct(array $coord){
		if (isset($coord['x'], $coord['y'], $coord['z'])){
			$this->_x = $coord['x'];
			$this->_y = $coord['y'];
			$this->_z = $coord['z'];
			if (isset($coord['w']))
				$this->_w = $coord['w'];

			if (isset($coord['color'])){
				$this->_color = new Color(array("red"=>$coord['color']->red, "green"=>$coord['color']->green, "blue"=>$coord['color']->blue));
			}else
				$this->_color = new Color(array("red"=>255, "green"=>255, "blue"=>255));
		}
		if (self::$verbose == true)
			print("$this constructed".PHP_EOL);
		return;
	}

	function __toString(){
		if (self::$verbose == false)
			return sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
		else if (self::$verbose == true)
			return sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, %3s )", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
	}

	function __destruct(){
		if (self::$verbose == true)
			print("$this destructed".PHP_EOL);
		return;
	}

	public static function doc(){
		echo "\n";
		return file_get_contents("Vertex.doc.text");
	}

	function setX($x){
		$this->_x = $x;
	}
	function setY($y){
		$this->_y = $y;
	}
	function setZ($z){
		$this->_z = $z;
	}
	function setW($w){
		$this->_w = $w;
	}
	function setColor(Color $Color){
		$this->_color->blue = $Color->blue;
		$this->_color->green = $Color->green;
		$this->_color->red = $Color->red;
	}
	function getX(){return $this->_x;}
	function getY(){return $this->_y;}
	function getZ(){return $this->_z;}
	function getW(){return $this->_w;}
	function getColor(){return $this->_color;}

}

?>