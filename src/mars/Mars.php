<?php

class Mars {
	public $plateau;
	
	// "single-ton"
	private static $instance;
	
	private function __construct() {
		$this->plateau = new Plateau(99, 99);
	}
	
	public static function GetInstance() {
		if (!(self::$instance instanceof Mars))
			self::$instance = new Mars();
			
		return self::$instance;
	}
}
