<?php
/*
	El objetivo es realizar invocaciones dinamicas de metodos.

	Utilizando los metodos magicos the __call() y __callStatic().
	Se puede atrapar la invocacion e indicar como tratarla.

	Esta tecnica es utilizada por los Object Relational Map "ORM" y en la creacion de clases proxy.

	Por ejemplo, si se quiere realizar busquedas por distintos campos. Uno podria crear un metodo por cada termino de busqueda: findById(), findByEmail(), findByPhone().

	Sin embargo es mas eficiente crear un solo metodo, donde la consulta sea dinamica.
	De esta forma se evita repetir logica de programacion.
*/

class Usuario {
	static function find($args) {
		// Aqui va logica del metodo
		// Por ejemplo la siguiente consulta SQL:
		// SELECT usuario FROM usuarios WHERE $args['campo'] = $args['valor']
	}
	
	static function __callStatic($method, $args) {
		if (preg_match('/^findBy(.+)$/', $method, $matches))
		{
			return static::find(array(	'campo' => $matches[1],
										'valor' => $args[0]));
		}
	}
}

$usuario = Usuario::findById(123);
$usuario = Usuario::findByEmail('ignacio@email.com');