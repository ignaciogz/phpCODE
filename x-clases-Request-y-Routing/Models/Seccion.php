<?php
namespace Models;

class Seccion{
	private $conexion;
	private $id;
	private $nombre;

	public function __construct()
	{
		$this->conexion = new Conexion();
	}

		public function set($atributo, $contenido)
		{
			$this->$atributo = $contenido;
		}

		public function get($atributo)
		{
			return $this->$atributo;
		}

	public function listar()
	{
		$sql = "SELECT * FROM secciones";
		$datos = $this->conexion->consultarDatos($sql);
		return $datos;
	}

	public function add()
	{
		$sql = "INSERT INTO secciones(id, nombre) VALUES (null, '{$this->nombre}')";
		$this->conexion->consultar($sql);
	}

	public function delete()
	{
		$sql = "DELETE FROM secciones WHERE id = '{$this->id}'";
		$this->conexion->consultar($sql);
	}

	public function edit()
	{
		$sql = "UPDATE secciones SET nombre = '{$this->nombre}' WHERE id = '{$this->id}'";
		$this->conexion->consultar($sql);
	}

	public function view()
	{
		$sql = "SELECT * FROM secciones WHERE id = '{$this->id}'";
		$datos = $this->conexion->consultarDatos($sql);
		$arrayDatos = mysqli_fetch_assoc($datos);
		return $arrayDatos;
	}
}