<?php
class DatabasePDO_N
{
	// Bases de datos validas para conectar
	private static $dsn =	array('zodiac' => 'sqlite:c:/data/zodiac.db',
							'users' => array('mysql:host=db.example.com','monty','7f2iuh'),
							'stats' => array('oci:statistics', 'statsuser','statspass'));
	
	// Contenedor de las N INSTANCIAS ! del Singleton
	private static $db = array();
	
	// Prohibo instanciar objetos
	// Evito que el objeto se pueda clonar, en caso de intentarlo disparo un error de nivel usuario
	final private function __construct() { }
    final private function __clone()
    {
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }
	
	public static function get($key)
	{
		if (! isset(self::$dsn[$key])) {
			throw new Exception("Unknown DSN: $key");
		}

		// Conecto, en caso de no existir una conexion previa!
		if (! isset(self::$db[$key])) {
			if (is_array(self::$dsn[$key])) {
				$c = new ReflectionClass('PDO');
				self::$db[$key] = $c->newInstanceArgs(self::$dsn[$key]);
			} else {
				self::$db[$key] = new PDO(self::$dsn[$key]);
			}
		}

		// Devuelvo la conexion
		return self::$db[$key];
	}
}