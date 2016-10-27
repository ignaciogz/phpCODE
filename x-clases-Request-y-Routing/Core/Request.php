<?php
namespace Core;

class Request{
	private $controlador;
	private $metodo;
	private $argumento;

	public function __construct()
	{
		if(isset($_GET['url']))
		{
			$uri = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
			$uri = explode("/", $uri);
			$uri = array_filter($uri);

			if($uri[0] == "index.php")
			{
				$this->controlador = "estudiantes";
			}else
			{
				$this->controlador = strtolower(array_shift($uri));	
			}
			

			$this->metodo = strtolower(array_shift($uri));
			if(!$this->metodo)
			{
				$this->metodo = "index";
			}


			$this->argumento = $uri;
		}
		else
		{
			$this->controlador = "estudiantes";
			$this->metodo = "index";
		}
	}

	public function getControlador()
	{
		return $this->controlador;
	}
	public function getMetodo()
	{
		return $this->metodo;
	}
	public function getArgumento()
	{
		return $this->argumento;
	}
}