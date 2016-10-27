<?php

class User{}

class FemaleUser{}


$foo = 'a:2:{i:0;O:4:"User":1:{s:6:"gender";s:4:"male";}i:1;O:10:"FemaleUser":1:{s:6:"gender";s:4:"male";}}';

$data = unserialize($foo, ["allowed_classes" => ["User"] ] );

foreach ($data as $instance) 
{
	echo '<br/>';
	echo get_class($instance);
	echo '<br/>';
	echo $instance->gender;
}


