<?php
	/*
	**	Aspectos relacionados con la teoria de OBJETOS:
	*/
?>
<?php
/*
**	INTERFACES
	
	En proyectos profesionales a veces es necesario que un equipo de varias
	personas trabajen juntas. En este caso se hace imprescindible definir unas
	pautas generales de trabajo para que el resultado final sea el esperado. 

	Si el desarrollo consiste en programar varios objetos, el analista de la aplicación
	puede definir la estructura básica en papel o crear una pequeña plantilla
	con métodos que el objeto final debería tener obligatoriamente. 

	Esta plantilla es un interface y permite definir una clase con funciones definidas,
	pero sin desarrollar, que obliga a todas las clases que lo implementen
	a declarar estos métodos como mínimo.
*/
	interface Web
	{
		public function setTitulo($titulo = "Titulo por defecto");
		public function getTitulo();
	}

	class pagina_Web implements Web
	/*
		La interface anterior define la estructura básica que queremos para el objeto,
		declarando las funciones setTitulo y getTitulo. Para que una clase haga
		uso de la interface se declara de la siguiente forma:
	*/



/*
**	CLASES ABSTRACTAS

	Un interface no permite crear el cuerpo de ninguna función, dejando
	esta tarea a las clases que la implementen. 

	Las clases abstractas permiten definir funciones que deben implementarse obligatoriamente
	en los objetos que hereden y, además, permiten definir funciones completas que pueden
	heredarse. 

	Las clases abstractas deben llevar la palabra reservada: abstract 
	En la declaración de la clase y en todos los métodos que sólo definan su nombre.
*/
	abstract class Web
	{
		protected $titulo;

		public function setTitulo($titulo = "Titulo por defecto")
		{
			$this->titulo = $titulo;
		}
		
		abstract public function getTitulo() ;
	}
	/*
		En lugar de un interface , hemos optado por utilizar una clase abstracta,
		porque tenemos claro que el método setTitulo() tiene que funcionar
		así. También se define el método abstracto getTitulo(), que  obligatoriamente
		debe ser declarado en la clase que herede de ésta. En realidad, un interface
		es una clase que tiene todos sus métodos abstractos.
	*/



/*
**	CLASES CON METODOS ESTATICOS

	En PHP 5 puede declarar funciones dentro de una clase que no utilicen
	propiedades o métodos de la misma. 

	Estos métodos pueden calcular valores numéricos, hacer una conexión a una base de datos o
	comprobar que un correo electrónico esté bien definido. Aunque no existe ninguna palabra
	reservada para definirlo, son conocidos como métodos estáticos y pueden	ser utilizados sin
	necesidad de instanciar un objeto.
*/
	class Nombre
	{
		protected $nombre;
		
		public function getNombre();
		{
			return $this->nombre;
		}
		
		public function setNombre($nombre)
		{
			$this->nombre = $nombre;
		}
		
		public function NombreDefecto(){
			return "Luis Miguel<br>";
		}
	}

	$luis = new Nombre;
	
	echo $luis->NombreDefecto();
	//También se puede acceder al nombre por defecto
	echo Nombre::NombreDefecto();
	
	/*
		Para acceder a un método estático desde el cuerpo del programa se escribe
		el nombre de la clase que lo implementa seguido del operador (::) y el
		nombre del método. En el ejemplo vemos que se puede acceder al método
		NombreDefecto() creando un objeto o mediante la construcción
		Nombre: : NombreDefecto . Si intenta llamar a un método que no es
		estático de esta forma se imprimirá un error en pantalla. La figura 9.4
		muestra el error que recibe si intenta llamar a un método no estático desde
		fuera de un objeto.
	*/



/*
**	SOBRECARGA EN PHP

	Algunos lenguajes de programación orientados a objetos permiten declarar
	más de un método con el mismo nombre. La definición de estos métodos
	varía en el número de parámetros o en los tipos de datos de los
	argumentos. 

		PHP 5 no permite sobrecarga de métodos, pero puede simular
		esta actuación empleando la técnica de las funciones con un número
		variable de parámetros !!

	El constructor de la clase Apellido puede quedar de la siguiente forma:
*/
	class Apellido extends Nombre
	{
		protected $apellidos;
		
		function construct($nombre)
		{
			if (func_num_args()= = 2 ) 
			{
				$apellidos = func_get_arg(1);
				$this->nombre = $nombre;
				$this->apellidos = $apellidos;
				parent:: construct($nombre);
			} else
			{
				$this->nombre = $nombre;
				$this->apellidos = $apellidos;
				parent:: construct($nombre);
			}
		}

		public function getApellidos()
		{
			return $this->apellidos;
		}
	}



/*
**	Serialización
	
	Los objetos son, en realidad, un conjunto de datos y funciones que guardan una serie de estados de ejecución. 

	Este conjunto de bits se pueden almacenar, en un momento dado, y recuperar justo en el mismo estado
	en el que se encontraba cuando lo guardamos. Esta técnica se llama serialización y permite almacenar
	y recuperar el conjunto de bits que forman un objeto.

	PHP 5 ofrece dos funciones, serialize() y unserialize() , que toman como parámetro un objeto
	y devuelven una cadena de caracteres. 
	Los objetos serializados los podemos almacenar en base de datos, ficheros, etcétera.
*/	
	$luis = new Apellido("Luis Miguel");
		echo $luis->getNombre() . "<br>";
		echo $luis- >getApellidos ();
	$manuel = serialize($luis);
	$pedro = unserialize($manuel);
		echo $pedro->getNombre ();

/*
**	El código anterior crea el objeto $luis y utiliza los métodos propios de la
	clase y los heredados. Después, utilizamos la función serialize() para grabar
	el estado del objeto como un conjunto de caracteres en la variable $manuel.
	La variable $pedro contiene el resultado de aplicar unserialize() a $manuel.
	De esta forma, conseguimos recuperar el objeto $luis con los datos que
	ya habíamos almacenado.
*/



/*
**	Funciones de MANEJO DE CLASES
	
	Las funciones siguientes son útiles para recuperar información sobre la
	herencia de las clases, sobre métodos o variables miembro o llamadas a
	las funciones.
*/

get_class();			/*Devuelve el nombre de la clase que implementa el objeto pasado como parámetro.*/
get_parent_class();		/*Devuelve el nombre de la clase padre.*/
class_exist(); 			/*Si el parámetro es el nombre de una clase, devuelve un true.*/
get_declared_class(); 	/*Devuelve un array con el nombre de todas las clases definidas en el código actual.*/
is_subclass_of(); 		/*Toma dos parámetros. Si el primer parámetro es una subclase del segundo parámetro la
						función devuelve un true.*/
is_a()get_class_vars();	/*Devuelve un array con parejas variable / valor de una clase, que tengan valores por defecto.*/
get_object_vars(); 		/*Devuelve un array con parejas variable / valor de un objeto, que tengan valores por defecto.*/
method_exists (); 		/*Toma dos parámetros. Si el objeto pasado tiene un método con el nombre del segundo parámetro,
						la función devuelve true.*/
get_class_method();		/*Devuelve un array de métodos definidos en una clase.*/