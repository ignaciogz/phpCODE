<?php
namespace Core;

class Routing
{
	public static function run(Request $request)
	{
		$controlador = $request->getControlador() . "Controller";
		$metodo = $request->getMetodo();
		$argumento = $request->getArgumento();

		$rutaControlador = ROOT . "Controllers" . DS . $controlador . ".php";
		
		if(is_readable($rutaControlador))
		{
			require_once $rutaControlador;
			$controladorSeleccionado = "Controllers\\" . $controlador;
			$controlador = new $controladorSeleccionado;

			if(!isset($argumento))
			{
				$datosObtenidos = call_user_func(array($controlador, $metodo));
			}else{
				$datosObtenidos = call_user_func_array( array($controlador, $metodo), $argumento );
			}
		}
	
		
		//Cargando La Vista
		$rutaVista = ROOT . "Views" . DS . $request->getControlador() . DS . $request->getMetodo() . ".php";
		if(is_readable($rutaVista))
		{
			require_once $rutaVista;
		}else{
			echo "No se encontro la vista";
		}
	}
}