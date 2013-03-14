<?php
require_once("config/config.php");

/*Commands::Parse("5 5");
echo "<br />";
Commands::Parse("1 2 N");
echo Commands::Parse("LMLMLMLMM");
echo "<br />";
Commands::Parse("3 3 E");
echo Commands::Parse("MMRMMRMRRM");*/

while (true) {
	fwrite(STDOUT, "> ");
	$cmd = fgets(STDIN);
	if (trim($cmd) == "quit") {
		fwrite(STDOUT, "Bye!\n");
		exit(0);
	} else if (trim($cmd) != "") {
		$out = Commands::Parse($cmd);
		if (is_string($out))
			fwrite(STDOUT, $out);
	}
	fwrite(STDOUT, "\n");
}
