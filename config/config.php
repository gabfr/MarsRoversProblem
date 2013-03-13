<?php
define("COMPLETE_PATH", "/Users/Gabriel/Sites/MarsRoversProblem");
define("PHPUNIT_PATH", COMPLETE_PATH . "/vendor");

set_include_path(get_include_path() . PATH_SEPARATOR . COMPLETE_PATH . PATH_SEPARATOR . PHPUNIT_PATH);

require_once(COMPLETE_PATH . "/src/autoloader.php");
