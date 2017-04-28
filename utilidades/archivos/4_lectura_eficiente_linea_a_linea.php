<?php
// Example 9-6. Reading a file one line at a time
$fh = fopen('people.txt','rb');

while ((! feof($fh)) && ($line = fgets($fh))) {
	$line = trim($line); //Quitando caracter de fin de linea.
	$info = explode('|', $line);
	print '<li><a href="mailto:' . $info[0] . '">' . $info[1] ."</li>\n";
}

fclose($fh);