<?php

require_once '../ex01/Vertex.class.php';


Class Vector {
	private $_x = 0.0;
	private $_y = 0.0;
	private $_z = 0.0;
	private $_w = 0.0;


	public static $verbose = false;

	function __construct(array $array){
		if (isset($array['dest'])){
			if (isset($array['orig'])){
				$orig = new Vertex(array('x' => $array['orig']->getX(), 'y' => $array['orig']->getY(), 'z' => $array['orig']->getZ()));
			} else {
				$orig = new Vertex(array('x' => 0, 'y' => 0, 'z' => 0));
			}
			$this->_x = $array['dest']->getX() - $orig->getX();
			$this->_y = $array['dest']->getY() - $orig->getY();
			$this->_z = $array['dest']->getZ() - $orig->getZ();
		}
		if (self::$verbose == true)
			print("$this constructed".PHP_EOL);
		return;
	}
	function __toString(){
		return sprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f )", $this->_x, $this->_y, $this->_z, $this->_w);

	}

	function __destruct(){
		if (self::$verbose == true)
			print("$this destructed".PHP_EOL);
		return;
	}

	public static function doc(){
		return file_get_contents("Vector.doc.text");
	}

	function magnitude(){return (float)(sqrt($this->_x * $this->_x + $this->_y * $this->_y + $this->_z * $this->_z));}
	function normalize(){
		$long = $this->magnitude();
		return new Vector(array("dest" => new Vertex(array('x' => ($this->_x / $long),'y' => ($this->_y / $long), 'z' => ($this->_z / $long)))));
	}
	function add( Vector $rhs ){
		return new Vector(array("dest" => new Vertex(array('x' => ($this->_x + $rhs->getX()),'y' => ($this->_y + $rhs->getY()), 'z' => ($this->_z + $rhs->getZ())))));
	}
	function sub( Vector $rhs ){
		return new Vector(array("dest" => new Vertex(array('x' => ($this->_x - $rhs->getX()),'y' => ($this->_y - $rhs->getY()), 'z' => ($this->_z - $rhs->getZ())))));
	}
	function dotProduct( Vector $rhs ){
		return (float)($this->_x * $rhs->getX() + $this->_y * $rhs->getY() + $this->_z * $rhs->getZ());
	}
	function crossProduct( Vector $rhs ){
		$tmp_x = $this->_y * $rhs->getZ() - $this->_z * $rhs->getY();
		$tmp_y = $this->_z * $rhs->getX() - $this->_x * $rhs->getZ();
		$tmp_z = $this->_x * $rhs->getY() - $this->_y * $rhs->getX();
		return new Vector(array("dest" => new Vertex(array('x' => $tmp_x, 'y' => $tmp_y, 'z' => $tmp_z))));
	}
	function opposite(){
		return new Vector(array("dest" => new Vertex(array('x' => ($this->_x * (-1)),'y' => ($this->_y * (-1)), 'z' => ($this->_z * (-1))))));
	}
	function scalarProduct( $k ){
		return new Vector(array("dest" => new Vertex(array('x' => ($this->_x * $k),'y' => ($this->_y * $k), 'z' => ($this->_z * $k)))));
	}
	function cos(Vector $rhs){
		$dot2vector = $this->dotProduct($rhs);
		return (float)($dot2vector / ($this->magnitude() * $rhs->magnitude()));
	}
	function getX(){return $this->_x;}
	function getY(){return $this->_y;}
	function getZ(){return $this->_z;}
	function getW(){return $this->_w;}
}

?>