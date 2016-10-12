<?php
/*
	¿Alguna vez necesitaste obtener indices aleatorios de un arreglo? Tal vez para esto utilizaste la funcion rand o mt_rand para obtener un numero aleatorio y despues lo pasaste como parametro para el indice de tu arreglo. Pero en realidad existe una forma mas rapida de obtener estos valores mediante la funcion array_rand.
	Lo unico que necesitas es pasar tu arreglo como parametro y esta te regresara un numero de indice aleatorio.
*/

	$frutas = ["Peras", "Manzanas", "Guayabas", "Ciruelas"];
	$k = array_rand($frutas); //Indice aleatorio
	$frutas[$k];
?>

<?php 
/*
	Si requieres mas valores aleatorios, indica cuantos valores necesitas dentro del segundo parametro y la funcion te regresara un arreglo con el numero de indices aleatorios.
*/

	$nombres = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
	$ganadores = array_rand($nombres, 2);
	echo $input[$ganadores[0]] . "n";
	echo $input[$ganadores[1]] . "n";
