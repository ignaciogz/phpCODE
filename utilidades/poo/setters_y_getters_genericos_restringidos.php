<?php
class ClaseGenerica
{
	protected $_permitidos = array('nombre', 'email');
	private $nombre;
	private $email;
	private $password;

	public function set($atributo, $contenido)
	{
		if (isset($this->_permitidos[$atributo]))
		{
			$this->$atributo = $contenido;
		} else {
			return false;
		}
	}

	public function get($atributo)
	{
		if (isset($this->_permitidos[$property]))
		{
			return $this->$atributo;
		} else {
			return false;
		}
	}
}