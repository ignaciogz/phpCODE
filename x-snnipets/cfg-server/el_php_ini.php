<?php
/*
	Algunos hosting permiten a sus clientes crear su propio php.ini (Ubicandolo en la raiz del sitio).
	Que tendra mas prioridad que el configurado por defecto en el server.
*/
?>

<?php
//.htacces
//; Maximum file size of post data that PHP will accept.
	post_max_size = 20M

//; Maximum allowed file size for uploaded files.
	upload_max_filesize = 20M
?>


<?php
//En ocasiones se necesita agregar el siguiende modificador:
//.htacces
	php_value upload_max_filesize 100M
	php_value post_max_size 100M
?>

<?php
//Otra opcion es hacerlo directamente desde php:
	www.php.net/manual/es/function.ini-get.php
	www.php.net/manual/es/function.ini-set.php