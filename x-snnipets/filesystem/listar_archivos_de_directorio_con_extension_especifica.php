<?php
/*
	Listar todos los archivos de un directorio. Ideal para obtener una lista de imagenes dentro de un directorio
*/
	$imagenes = glob("/directorio/imagenes/*.{jpg,gif,png}", GLOB_BRACE);  
	print_r($imagenes);
?>