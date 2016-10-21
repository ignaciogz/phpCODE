<?php
function FileLineGenerator($file) {
	if (!$fh = fopen($file, 'r')) {
		return;
	}

	while (false !== ($line = fgets($fh))) {
		yield $line;
	}

	fclose($fh);
}


//Ejemplo 1:
$file = FileLineGenerator('log.txt');
foreach ($file as $line) {
	if (preg_match('/^errorX: /', $line)) { print $line; }
}


//Ejemplo 2:
$line_number = 0;
foreach (FileLineGenerator('sayings.txt') as $line) {
	$line_number++;
	if (mt_rand(0, $line_number - 1) == 0) {
		$selected = $line;
	}
}
print $selected . "\n";