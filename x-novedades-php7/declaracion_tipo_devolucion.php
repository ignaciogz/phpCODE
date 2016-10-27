<?php
declare(strict_types=1);
function add(int $number1, int $number2) : int
{

	return $number1 + $number2;

}

echo add(10, 12);

function greet($name) : string
{
	return $name;
}

echo '<br/>';

echo greet('Bernardo');