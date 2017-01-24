<?php
/*
	Entre Call ob_start() y ob_end_flush().
	Puedo ejecutar comandos que generen salidas o comandos que generaran headers.
	
	PERO no se enviaran al navegador hasta que se ejecute ob_end_flush():
*/?>

	<?php ob_start(); ?>
		Todavia no decidi si enviar las coockies
		<?php setcookie('dato','valor'); ?>
		Ok, despues de todo. Decido enviarla.
	<?php ob_end_flush();


/*
	A ob_start() le puedo pasar como parametro el nombre de una funcion, que procesara el buffer de salidad.
	
	Esto es util para realizar post procesamiento del contenido de la pagina. Como por ejemplo ocultar la direccion de correo de los robots
*/
	function no_mostrar_email($s) {
		return preg_replace('/([^@\s]+)@([-a-z0-9]+\.)+[a-z]{2,}/is',
		'<$1@...>',
		$s);
	}
	ob_start('no_mostrar_email');
	?>
		NO quiero SPAM en la cuenta de correo email@email.com!
	<?php
	ob_end_flush();