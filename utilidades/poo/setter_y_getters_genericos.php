<?php
class ClaseGenerica
{
	/* 
		GETTERS Y SETTERS al estilo Jquery
		Aprovecho el azucar sintactico de PHP
	*/
	public function set($atributo, $contenido)
	{
		//internamente podria restringir el acceso
		$this->$atributo = $contenido;
	}

	public function get($atributo)
	{
		//internamente podria restringir el acceso
		return $this->$atributo;
	}
}