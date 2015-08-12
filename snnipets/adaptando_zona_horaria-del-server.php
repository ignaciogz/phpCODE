<?php
	/*
	**	MODIFICANDO LA HORA SETEADA EN EL SERVER
	Por lo general, el tiempo establecido en el servidor no es exactamente igual a la hora local.
	*/
?>
<?php
/* ---------------- SOLUCION 1 ---------------- */

	$horario = date('Y-m-d-G');
	$horaActual = strftime("%Y-%m-%d-%H", strtotime("$horario -5 hour"));
	//Si su servidor pensó que era 12 de la noche, pero es realmente 19:00, a $horario hay que restarle 5 horas !


/* ---------------- SOLUCION 2 ---------------- */
/*	(Valida para PHP > 5.1)
**	Listado de parametro para la funcion:
		http://php.net/manual/es/function.date-default-timezone-set.php
*/
	date_default_timezone_set('America/Argentina/Buenos_Aires');