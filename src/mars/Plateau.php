<?php

class Plateau implements ISurface {
	private $width;
	private $height;
	
	public function __construct($width, $height) {
		$this->width = $width;
		$this->height = $height;
	}
	
	public function SetWidth($width) {
		$this->width = $width;
		return $this;
	}
	public function GetWidth() {
		return $this->width;
	}
	
	public function SetHeight($height) {
		$this->height = $height;
		return $this;
	}
	public function GetHeight() {
		return $this->height;
	}
	
	public function ValidateCoordinate(Coordinate $coord) {
		// Starts in zero, so width and height is in real width-1 and height-1
		return ($coord->x >= 0 && $coord->y >= 0 && $coord->x < $this->width && $coord->y < $this->height);
	}
}

?>