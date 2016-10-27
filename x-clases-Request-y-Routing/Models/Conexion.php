<?php 
namespace Models;

class Conexion{
	private $datos = array(
		"host" => "localhost",
		"user" => "root",
		"pass" => "",
		"db" => "pruebas"
	);
	private $conexion;

	public function __construct()
	{
		$this->conexion = new \mysqli(
				$this->datos['host'],
				$this->datos['user'],
				$this->datos['pass'],
				$this->datos['db']);
	}

	public function consultar($query)
	{
		$this->conexion->query($query);
	}

	public function consultarDatos($query)
	{
		$datos = $this->conexion->query($query);
		return $datos;
	}
}