<?php
// Example 9-4. Accessing each line of a file
foreach (file('people.txt') as $line)
{
	$line = trim($line);
	$info = explode('|', $line);
	print '<li><a href="mailto:' . $info[0] . '">' . $info[1] ."</li>\n";
}