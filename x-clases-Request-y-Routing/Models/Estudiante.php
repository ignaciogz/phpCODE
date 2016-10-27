<?php
namespace Models;

class Estudiante{
	private $conexion;
	private $id;
	private $nombre;
	private $edad;
	private $promedio;
	private $imagen;
	private $id_seccion;
	private $fecha;

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
		$sql = "SELECT t1.*, t2.nombre AS nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion = t2.id";
		$datos = $this->conexion->consultarDatos($sql);
		return $datos;
	}

	public function add()
	{
		$sql = "INSERT INTO estudiantes(id, nombre, edad, promedio, imagen, id_seccion, fecha) VALUES (null, '{$this->nombre}', '{$this->edad}', '{$this->promedio}', '{$this->imagen}', '{$this->id_seccion}', NOW())";
		$this->conexion->consultar($sql);
	}

	public function delete()
	{
		$sql = "DELETE FROM estudiantes WHERE id = '{$this->id}'";
		$this->conexion->consultar($sql);
	}

	public function edit()
	{
		$sql = "UPDATE estudiantes SET nombre = '{$this->nombre}', edad = '{$this->edad}', promedio = '{$this->promedio}', id_seccion = '{$this->id_seccion}' WHERE id = '{$this->id}'";
		$this->conexion->consultar($sql);
	}

	public function view()
	{
		$sql = "SELECT t1.*, t2.nombre AS nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2
			ON t1.id_seccion = t2.id WHERE t1.id = '{$this->id}'";
		$datos = $this->conexion->consultarDatos($sql);
		$arrayDatos = mysqli_fetch_assoc($datos);
		return $arrayDatos;
	}
}