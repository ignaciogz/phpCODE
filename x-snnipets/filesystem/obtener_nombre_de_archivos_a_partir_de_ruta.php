<?php
/*
	Cuando se trabaja con archivos usualmente se desea obtener el nombre de los archivos de alguna ruta o directorio. 
	
	Afortunadamente tambien existe una funcion para esto la cual nos puede retornar dos posibles resultados dependiendo de los parametros.

	Por ejemplo si se utiliza sin parametros obtendremos como resultado el nombre completo del archivo mas su extension y el otro caso es cuando en el segundo parametro introducimos la extension, lo cual nos devolvera solo el nombre del archivo.
*/
	$ruta = "/alguna/ruta/de/algun/archivo/mi-archivo.pdf";
	$nombre_archivo = basename($ruta); // mi-archivo.pdf
	$nombre_archivo = basename($ruta, ".pdf"); // mi-archivo
	echo $filename1."n";
	echo $filename2;