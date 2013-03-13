<?php
define("COMPLETE_PATH", "/Users/Gabriel/Sites/MarsRovers/MarsRovers");
define("PHPUNIT_PATH", COMPLETE_PATH . "/vendor");

// Change this when you don't want auto load bothering any more.
define("TESTING", true);

set_include_path(get_include_path() . PATH_SEPARATOR . COMPLETE_PATH . PATH_SEPARATOR . PHPUNIT_PATH);

require_once(COMPLETE_PATH . "/src/autoloader.php");
