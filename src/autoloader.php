<?php
if (!defined("COMPLETE_PATH"))
	die();

$classesTree = array(
	"IExplorer" => COMPLETE_PATH."/src/interfaces/IExplorer.php",
	"ISurface" => COMPLETE_PATH."/src/interfaces/ISurface.php",
	"Mars" => COMPLETE_PATH."/src/mars/Mars.php",
	"Plateau" => COMPLETE_PATH."/src/mars/Plateau.php",
	"Coordinate" => COMPLETE_PATH."/src/rover/Coordinate.php",
	"Position" => COMPLETE_PATH."/src/rover/Position.php",
	"Rover" => COMPLETE_PATH."/src/rover/Rover.php",
	"Commands" => COMPLETE_PATH."/src/Commands.php"
);

spl_autoload_register(function ($className) {
	global $classesTree;
		
	/*if (!array_key_exists($className, $classesTree))
		throw new Exception(sprintf("Class not found: %s", $className));
	else
		require_once($classesTree[$className]);*/
	if (array_key_exists($className, $classesTree))
		require_once($classesTree[$className]);
});

/*if (!function_exists("__autoload")) {
	function __autoload($className) {
		global $classesTree;
		
		if (!array_key_exists($className, $classesTree))
			throw new Exception(sprintf("Class not found: %s", $className));
		else
			require_once($classesTree[$className]);
		
	}
}*/
