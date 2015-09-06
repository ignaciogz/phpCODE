<?php
	use Symfony\Component\HttpFoundation\Response;
	$response = new Response();

		$response->setContent('<html><body><h1>Hello world!</h1></body></html>');
		$response->setStatusCode(200);
		$response->headers->set('Content-Type', 'text/html');

		// imprime las cabeceras HTTP seguidas por el contenido
		$response->send();