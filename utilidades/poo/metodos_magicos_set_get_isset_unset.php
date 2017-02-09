<?php
class Person {
	protected $__datos = array('nombre' => false, 'email' => false);
	
	public function __get($propiedad) {
		if (isset($this->__datos[$propiedad])) {
			return $this->__datos[$propiedad];
		} else {
			return false;
		}
	}
	
	public function __set($propiedad, $valor) {
		if (isset($this->__datos[$propiedad])) {
			return $this->__datos[$propiedad] = $valor;
		} else {
			return false;
		}
	}

	public function __isset($property) {
		return isset($this->data[$property]);
	}

	public function __unset($property) {
		if (isset($this->data[$property])) {
			unset($this->data[$property]);
		}
	}
}


$nacho = new Person;
$nacho->email = 'ignacio@email.com';	// Metodo Magico SET: $user->__datos['email']
print $nacho->email; 					// Metodo Magico GET: $user->__datos['email']

/** VENTAJA DE UTILIZAR LOS METODOS MAGICOS:
	* Manipular propiedades privadas y protegidas de manera externa
	* Pero sin romper el encapsulamiento!
*/

/** DESVENTAJAS DE UTILIZAR LOS METODOS MAGICOS:
	*
	* 1) El uso de metodos magicos es mas lento en terminos de performance. 
	* 2) Los metodos setters y getters para propiedades son un poco mas rapidos.
	* 3) No se puede usar la ReflectionClass, dado que hay herramientas que la utilizan.
	* 	 Por ejemplo: las de documentacion automatica de codigo.
	* 4) No se pueden usar con propiedades estaticas.
	* 5) Los metodos magicos no se heredan por defecto, debemos invocar al del padre con parent::
*/