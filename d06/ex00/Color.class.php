#!/usr/bin/php
<?php

Class Color {
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	public $rgb = 0;
	public static $verbose = false;

	function __construct(array $rgb){
		if (isset($rgb['red'], $rgb['blue'], $rgb['green']) and count($rgb) == 3){
			$this->blue = $rgb['blue']& 255;
			$this->green = $rgb['green']& 255;
			$this->red = $rgb['red']& 255;
		}
		elseif (isset($rgb['rgb']) and count($rgb) == 1){
			$this->red = intval($rgb['rgb']) >> 16 & 255;
			$this->green = intval($rgb['rgb']) >> 8 & 255;
			$this->blue = intval($rgb['rgb']) & 255;
		}
		if (self::$verbose == true)
			print("$this constructed.".PHP_EOL);
		return;
	}

	function __toString(){
		return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
	}

	function __destruct(){
		if (self::$verbose == true)
			print("$this destructed.".PHP_EOL);
		return;
	}

	public static function doc(){
		return file_get_contents("Color.doc.text");
	}

	function add(Color $rhs){
		return new Color (array('red' => $this->red + $rhs->red,'green' => $this->green + $rhs->green,'blue' => $this->blue + $rhs->blue));
	}

	function sub(Color $rhs){
		return new Color (array('red' => $this->red - $rhs->red,'green' => $this->green - $rhs->green,'blue' => $this->blue - $rhs->blue));
	}

	function mult($f){
		return new Color (array('red' => $this->red * $f, 'green' => $this->green * $f, 'blue' => $this->blue * $f));
	}

	function __clone(){
		return;
	}
}

?>