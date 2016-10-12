<?php
/*
	Retorna el código PHP desde un archivo pero sin comentarios ni espacios. El código se muestra de una forma "comprimida". Es similar a utilizar php -w archivo.php desde una consola de comandos. Ejemplo
*/

		/*
		 * Al mostrar el código luego de php_strip_whitespace
		 * estos comentarios no apareceran. Y también se van a
		 * borrar los espacios que existan entre las instrucciones
		 */
	echo php_strip_whitespace(__FILE__); // mostrar el contenido del archivo actual
	do_nothing();
?>