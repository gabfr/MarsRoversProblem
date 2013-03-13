<?php
require_once("config/config.php");

Commands::Parse("5 5");
echo "<br />";
Commands::Parse("1 2 N");
echo Commands::Parse("LMLMLMLMM");
echo "<br />";
Commands::Parse("3 3 E");
echo Commands::Parse("MMRMMRMRRM");
