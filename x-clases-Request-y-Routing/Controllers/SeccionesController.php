<?php
namespace Controllers;
use Models\Seccion as modeloSeccion;

Class SeccionesController{
	private $modeloSeccion;

	public function __construct()
	{
		$this->modeloSeccion = new modeloSeccion();
	}

	public function index()
	{
		$datos = $this->modeloSeccion->listar();
		return $datos;
	}
}