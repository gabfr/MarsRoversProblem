<?php
define("COMPLETE_PATH", dirname(__FILE__) . "/..");
define("PHPUNIT_PATH", COMPLETE_PATH . "/vendor");

set_include_path(get_include_path() . PATH_SEPARATOR . COMPLETE_PATH);

require_once(COMPLETE_PATH . "/src/autoloader.php");
