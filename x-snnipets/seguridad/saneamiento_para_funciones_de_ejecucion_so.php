<?php
/*
	Esta función nos sirve para escapar cualquier caracter en una cadena que pudiera ser usado para engañar al sistema para que ejecute comandos arbitrarios. Se utilizaría para escapar un texto ingresado por el usuario antes de pasarlo a una función como exec() o system()
*/
   $comando = './ejecutar-' . $_POST[ 'accion' ];
   $comando = escapeshellcmd( $comando );
   system( $comando );
?>
