<?php

class Commands {

	static public $rover;
	
	public static function Parse($cmds) {
		if (strlen($cmds) <= 0)
			return false;
		
		$isDeploy = false;
		
		$cmdsArr = array();
		
		foreach (str_split($cmds) as $charNum => $char) {
			if (is_numeric($char)) { // Position Coordinates
				$cmdsArr[] = $char;
				$isDeploy = true;
			} else if (trim($char) != "") { // M, L, R || N, S, E, W
				if (!$isDeploy && Commands::$rover instanceof Rover)
					Commands::RoverCommand($char);
				else
					$cmdsArr[] = $char;
			}
		}
		
		if ($isDeploy && Commands::ValidateDeployArgs($cmdsArr)) {
			Commands::$rover = new Rover();
			Commands::$rover->Deploy(Mars::GetInstance()->plateau, 
					new Position((int)$cmdsArr[0], (int)$cmdsArr[1], $cmdsArr[2]));
		} else if (Commands::$rover instanceof Rover) {
			$lineOut = sprintf("%d %d %s", Commands::$rover->position->x, 
					Commands::$rover->position->y, Commands::$rover->position->direction);
			Commands::$rover = null;
			return $lineOut;
		}
	}
	
	private static function RoverCommand($cmd) {
		switch ($cmd) {
			case "M":
				Commands::$rover->Move();
				break;
			case "L":
				Commands::$rover->TurnLeft();
				break;
			case "R":
				Commands::$rover->TurnRight();
				break;
		}
	}
	
	public static function ValidateDeployArgs(array $args) {
		return (count($args) >= 3 && is_numeric($args[0]) && 
				is_numeric($args[1]) && Position::IsValidDirection($args[2]));
	}
	
}

?>