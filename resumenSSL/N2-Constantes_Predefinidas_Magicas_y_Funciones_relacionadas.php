<?php
/*
**	Teoria de CONSTANTES:
*/
?>
<?php
	define ("COLOR_ROJO"," #FF0000"); //Definimos primero la constante

	echo COLOR_ROJO; //Y ahora escribimos en pantalla su resultado
	//Hay que destacar que el signo de $ no hace falta ponerlo.
	
	//Existe otra función que nos permite averiguar el valor de la constante:
	echo constant ("COLOR_ROJO");


/*
**	Puedo utilizar defined ()
**	Para averiguar si una constante ya se ha creado:
*/
	define("CONSTANTE_NUEVA","php");

	if (defined("CONSTANTE_NUEVA") )
	{
		echo "Aprendiendo: ".CONSTANTE_NUEVA;
	}


/*
**	Constantes PREDEFINIDAS en PHP 5:
*/
	echo PHP_VERSION; 			//Versión del parse de PHP que estamos utilizando.
	echo PHP_OS; 				//Sistema operativo del servidor de PHP.
	echo PEAR_EXTENSION_DIR; 	//Ruta donde está instalada la extensión PEAR.
	echo PHP_LIBDIR; 			//Ruta donde están almacenadas las librerías de PHP 5.


/*
**	Finalmente tenemos 5 constantes MAGICAS !
**	Estas, cambian de valor dependiendo del lugar donde se usen:
*/
	__LINE__ 		//Indica el número de línea desde la que imprimimos el valor.
	__FILE__ 		//Ruta completa al fichero.
	__FUNCTION__ 	//Nombre de la función que la contiene.
	__CLASS__ 		//Nombre de la clase.
	__METHOD__		//Nombre del método.