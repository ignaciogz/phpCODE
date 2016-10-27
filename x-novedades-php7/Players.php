<?php
/**
* Class implementing the ArrayAccess Interface
**/
class Players implements ArrayAccess {
    private $array_container = array();

    public function __construct() {
        $this->array_container = array(
            0   => 'Agassi',
            1   => 'Sampras',
            2 => 'Kuerten',
        );
    }

    public function offsetSet($offset, $valor) {
        if (is_null($offset)) {
            $this->array_container[] = $valor;
        } else {
            $this->array_container[$offset] = $valor;
        }
    }

    public function offsetExists($offset) {
        return isset($this->array_container[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->array_container[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->array_container[$offset]) ? $this->array_container[$offset] : null;
    }
}