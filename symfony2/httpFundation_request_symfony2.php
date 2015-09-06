<?php
	use Symfony\Component\HttpFoundation\Request;

	$request = Request::createFromGlobals();

	// la URI solicitada (p. ej. /sobre) menos algunos parámetros de la consulta
		$request->getPathInfo();

	// recupera las variables GET y POST respectivamente
		$request->query->get('foo');
		$request->request->get('bar', 'default value if bar does not exist');

	// recupera las variables de SERVER
		$request->server->get('HTTP_HOST');

	// recupera una instancia del archivo subido identificado por foo
		$request->files->get('foo');

	// recupera un valor de COOKIE
		$request->cookies->get('PHPSESSID');

	// recupera una cabecera HTTP de la petición, normalizada, con índices en minúscula
		$request->headers->get('host');
		$request->headers->get('content_type');

		$request->getMethod();          // GET, POST, PUT, DELETE, HEAD
		$request->getLanguages();       // un arreglo de idiomas aceptados por el cliente

	// comprueba tres diferentes valores en PHP que pueden indicar si el usuario está conectado 
	//	a través de una conexión segura (es decir, https).
		isSecure();