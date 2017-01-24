<?php
/*
	El objetivo es forzar el envio de datos al navegador.

	Por ejemplo:
	Si se le quiere enviar informacion del estado de la peticion al usuario,
	antes de realizar una consulta pesada en la base de datos.
*/
	print 'Buscando en la tabla de usuarios...';
	flush();
	$sth = $dbh->query(
		'SELECT nombre,COUNT(*) AS c FROM usuarios GROUP BY nombre HAVING c > 1');


/*
	flush() esta funcion enviar todas las salidas que PHP tiene para realizar hasta el momento en su buffer, al servidor web. Y este ultimo se encargara de enviarlo al cliente. 

	Tener en cuenta que algunos navegadores no muestran estos datos directamente.
	Por ejemplo algunas versiones de Internet Explorer, no muestran datos por pantalla hasta que se obtenga al menos 256 bytes de datos del paquete.
*/

//Metodo para forzar que IE muestre el contenido inmediatamente:
	print str_repeat(' ',300);
	print 'Buscando en la tabla de usuarios...';
	flush();
	$sth = $dbh->query(
		'SELECT nombre,COUNT(*) AS c FROM usuarios GROUP BY nombre HAVING c > 1');