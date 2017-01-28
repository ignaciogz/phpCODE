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

	// Especifico la clonacion PROFUNDA
	public function __clone() {
		$this->address = clone $this->address;
	}
}


$nacho = new Person;
$nacho->setName('Ignacio Gutierrez');
$nacho->setCity('CABA');

/**
	* La clonacion PROFUNDA:
	*   Copia las valores de la propiedades.
	*	Debo ESPECIFICAR que objetos almacenados en propiedades, se deben clonar. 
	*   (Evitando asi, que solo se guarde una referencia como sucede en la clonacion superficial)
*/
$elClonMalvado = clone $nacho;
$elClonMalvado->setName('Ignacio Gutierrez (MALVADO)');
$elClonMalvado->setCity('Mar del Plata');


/**
	* Ahora, si modifico la ciudad en el clon. Solo este sera afectado.
	* (Dado que ahora cada clon posee su propio objeto de la clase Address).
*/
print $nacho->getName() . ' vive en ' . $nacho->getCity() . '.';
print $elClonMalvado->getName() . ' vive in ' . $elClonMalvado->getCity() . '.';