<?php
class Address {
	protected $city;
	
	public function setCity($city) {
		$this->city = $city;
	}
	
	public function getCity() {
		return $this->city;
	}
}

class Person {
	protected $name;
	protected $address;
	
	public function __construct() {
		$this->address = new Address;
	}
	
	public function setName($name) {
		$this->name = $name;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function __call($method, $arguments) {
		if (method_exists($this->address, $method)) {
			return call_user_func_array(
			array($this->address, $method), $arguments);
		}
	}
}

// No se puede decir que una persona es una direccion
// Pero si, que una persona POSEE una direccion
$nacho = new Person;
$nacho->setName('Ignacio Gutierrez');
$nacho->setCity('CABA');
print $nacho->getName() . ' lives in ' . $nacho->getCity() . '.';


/** VENTAJA DE UTILIZAR ESTOS METODOS MAGICOS
	* El objeto es componer 2 o mas objetos, para que simulen ser un unico objeto.
	* Puedo tratar el objeto como una entidad.
	* Evita la creacion codigo para metodos, que son necesarios para el acceso a metodos
	* de otros objetos que integran mi objeto.	
*/

/*
	* Para poder enrutar metodos estaticos, existe el metodo magico: __callStatic()
*/