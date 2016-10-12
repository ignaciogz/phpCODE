<?php
/*
	Digamos que tenemos un arreglo, pero a cada llave le queremos asignar un nombre especifico. La opcion mas simple para esto es utulizar la funcion list
*/
	$arreglo = array("Juan Daniel", "23", "Mexico", "55010");
	list($nombre, $edad, $ciudad, $codigo_postal) = $arreglo;
	<p>echo $nombre."<br>";
	echo $edad."<br>";
	echo $ciudad."<br>";
	echo $codigo_postal."<br>";
?>