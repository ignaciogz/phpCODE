<?php
/*
	El objetivo es ejecutar codigo diferente dependiendo del numero o tipo de argumentos pasados al metodo.

	Solucion:
		PHP no posea esta funcionlidad. Pero sin embargo se puede emular, utilizando funciones para verificacion de tipo de datos: is_numeric(), is_string(), is_array(), and is_bool().

	Si bien existen los types hints. A partir de PHP 7 recien poseen un soporte completo.

	Para emular polimorfismo por cantidad de argumentos pasados. Se puede utiliar la funcion func_num_args().
	Como figura en el archivo numero_de_argumentos_variables.php
*/


// combinar() suma numeros, concatena strings, une arrays y aplica condicion booleana AND
	function combinar($a, $b) {
		if (is_int($a) && is_int($b)) {
			return $a + $b;
		}
		
		if (is_float($a) && is_float($b)) {
			return $a + $b;
		}
		
		if (is_string($a) && is_string($b)) {
			return "$a$b";
		}
		
		if (is_array($a) && is_array($b)) {
			return array_merge($a, $b);
		}
		
		if (is_bool($a) && is_bool($b)) {
			return $a & $b;
		}

		return false;
	}