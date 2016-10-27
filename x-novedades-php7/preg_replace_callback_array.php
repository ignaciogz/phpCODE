<?php
$subject = 'hi, there is nothing compared to PHP 7.';

$replaced = preg_replace_callback_array(
	[
		'/nothing/' => 	function ($match)
				{
					return ucwords($match[0]);
				},
		'/^hi/' => 	function ($match)
				{
					return ucwords($match[0]);
				},
	], 
	$subject);


echo PHP_EOL , $replaced;