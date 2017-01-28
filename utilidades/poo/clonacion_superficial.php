<?php
class Address {
	protected $city;
	protected $country;
	
	public function setCity($city) { $this->city = $city; }
	public function getCity() { return $this->city; }
	public function setCountry($country) { $this->country = $country; }
	public function getCountry() { return $this-> country;}
}

class Person {
	protected $name;
	protected $address;
	
	public function __construct() { $this->address = new Address; }
	public function setName($name) { $this->name = $name; }
	public function getName() { return $this->name; }
	public function __call($method, $arguments) {
		if (method_exists($this->address, $method)) {
			return call_user_func_array( array($this->address, $method), $arguments);
		}
	}
}


$nacho = new Person;
$nacho->setName('Ignacio Gutierrez');
$nacho->setCity('CABA');

/**
	* La clonacion por DEFECTO es SUPERFICIAL:
	*   Copia las valores de la propiedades.
	*	Mantiene las referencias a otros objetos (Como es el caso de la propiedad $address).
*/
$elClonMalvado = clone $nacho;
$elClonMalvado->setName('Ignacio Gutierrez (MALVADO)');
$elClonMalvado->setCity('Mar del Plata');


/**
	* Como mantiene las referencias, si modifico la ciudad en el clon.
	* Implicitamente estoy modificando el mismo objeto.
 	* (Porque mantiene la referencia al objeto de la clase Address, NO GENERA UN CLON DE ESTE)
*/
print $nacho->getName() . ' vive en ' . $nacho->getCity() . '.';
print $elClonMalvado->getName() . ' vive in ' . $elClonMalvado->getCity() . '.';