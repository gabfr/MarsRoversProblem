<?php

class Position extends Coordinate {
	const North = 'N';
	const South = 'S';
	const East = 'E';
	const West = 'W';
	
	public $direction;
	
	public function __construct($x, $y, $direction) {
		parent::__construct($x, $y);
		$this->direction = $direction;
	}
	
	public static function IsValidDirection($direction) {
		return ($direction == Position::North || $direction == Position::South ||
				$direction == Position::East || $direction == Position::West);
	}
}

