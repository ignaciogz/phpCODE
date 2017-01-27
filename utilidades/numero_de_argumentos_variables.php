<?php
/**
	* NUMERO DE ARGUMENTOS VARIABLES: 
	*	func_num_args
	*	func_get_arg
	*	func_get_args
*/

function promedio()
{
	// Inicializacion del sumador
	$sum = 0;
	
	// Obtengo la cantidad de argumentos ingresados en momento de invocacion
	$size = func_num_args();
	
	for ($i = 0; $i < $size; $i++) {
		$sum += func_get_arg($i);
	}
	
	// Obtengo el promedio
	$average = $sum / $size;

	return $average;
}

// El resultado es: 96.25
$prom1 = promedio(96, 93, 98, 98);



/**
	* Opcion 2
	* Invoco func_get_args() para obtener un array con todos los argumentos ingresados
*/
function promedio2()
{
	// Inicializacion del sumador
	$sum = 0;
	
	// Obtengo la cantidad de argumentos ingresados en momento de invocacion
	$size = func_num_args();
	
	foreach (func_get_args() as $arg) {
		$sum += $arg;
	}
	
	// Obtengo el promedio
	$average = $sum / $size;
	
	return $average;
}

// El resultado es: 96.25
$prom2 = promedio2(96, 93, 98, 98);