<?php
/*
	Crear variables a partir de una cadena de texto separadas por algun caracter especifico
*/
	<p>$datos = "Juan Daniel:23:Mexico:55010";</p>
	<pre>list($nombre, $edad, $ciudad, $codigo_postal) = explode(":", $datos);
	 
	echo $nombre."<br>";
	echo $edad."<br>";
	echo $ciudad."<br>";
	echo $codigo_postal."<br>";