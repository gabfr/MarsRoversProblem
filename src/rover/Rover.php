<?php

class Rover {

	public $position;
	public $surface;
	
	public function __construct() {
		$this->surface = null;
		$this->position = null;
	}
	
	public function Deploy(ISurface $surface, Position $position) {
		if ($surface->ValidateCoordinate($position)) {
			$this->position = $position;
			$this->surface = $surface;
			return true;
		} else {
			$this->position = null;
			$this->surface = null;
			return false;
		}
	}
	
	public function IsDeployed() {
		return ($this->position != null && $this->surface != null);
	}
	
	public function Move() {
		switch ($this->position->direction) {
			case Position::North:
				$this->position->y += 1;
				break;
			case Position::South:
				$this->position->y -= 1;
				break;
			case Position::East:
				$this->position->x += 1;
				break;
			case Position::West:
				$this->position->x -= 1;
				break;
		}
		return $this;
	}
	
	public function TurnLeft() {
		switch ($this->position->direction) {
			case Position::North:
				$this->position->direction = Position::West;
				break;
			case Position::South:
				$this->position->direction = Position::East;
				break;
			case Position::East:
				$this->position->direction = Position::North;
				break;
			case Position::West:
				$this->position->direction = Position::South;
				break;
		}
		return $this;
	}
	
	public function TurnRight() {
		switch ($this->position->direction) {
			case Position::North:
				$this->position->direction = Position::East;
				break;
			case Position::South:
				$this->position->direction = Position::West;
				break;
			case Position::East:
				$this->position->direction = Position::South;
				break;
			case Position::West:
				$this->position->direction = Position::North;
				break;
		}
		return $this;
	}
}

