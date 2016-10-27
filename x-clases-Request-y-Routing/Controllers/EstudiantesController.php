<?php 
namespace Controllers;
use Models\Estudiante as modeloEstudiante;
use Models\Seccion as modeloSeccion;

Class EstudiantesController{
	private $modeloEstudiante;
	private $modeloSeccion;

	public function __construct()
	{
		$this->modeloEstudiante = new modeloEstudiante();
		$this->modeloSeccion = new modeloSeccion();
	}

	public function index()
	{
		$datos = $this->modeloEstudiante->listar();
		return $datos;
	}

	public function agregar()
	{
		if(!$_POST)
		{
			$datos = $this->modeloSeccion->listar();
			return $datos;
		}else{
			$permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
			$limite = 700;

			if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite*1024 )
			{
				$nombre = date('is') . $_FILES['imagen']['name'];
				$ruta = "Views". DS . "template" . DS . "imagen" . DS . "avatars" . DS . $nombre;
				move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);

				$this->modeloEstudiante->set("nombre", $_POST['nombre']);
				$this->modeloEstudiante->set("edad", $_POST['edad']);
				$this->modeloEstudiante->set("promedio", $_POST['promedio']);
				$this->modeloEstudiante->set("imagen", $nombre);
				$this->modeloEstudiante->set("id_seccion", $_POST['id_seccion']);
				$this->modeloEstudiante->add();
				header("Location: " . URL . "estudiantes");
			}
		}
	}

	public function editar($id)
	{
		if(!$_POST){
			$this->modeloEstudiante->set("id", $id);
			$datos = $this->modeloEstudiante->view();
			return $datos;	
		}else{
			$this->modeloEstudiante->set("nombre", $_POST['nombre']);
			$this->modeloEstudiante->set("edad", $_POST['edad']);
			$this->modeloEstudiante->set("promedio", $_POST['promedio']);
			$this->modeloEstudiante->set("id_seccion", $_POST['id_seccion']);
			$this->modeloEstudiante->edit();
			header("Location: " . URL . "estudiantes");
		}
		
	}

	public function listarSecciones()
	{
		$datos = $this->modeloSeccion->listar();
		return $datos;
	}

	public function ver($id)
	{
		$this->modeloEstudiante->set("id", $id);
		$datos = $this->estudiante->view();
		return $datos;
	}

	public function eliminar($id)
	{
		$this->modeloEstudiante->set("id", $id);
		$this->modeloEstudiante->delete();
		header("Location: " . URL . "estudiantes");
	}
}