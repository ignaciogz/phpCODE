<?php

abstract class User {
    abstract function greet(string $name);
    public $age;
    protected $gender;
}

$female_user = (
                    new class extends User 
                    {

                        public $age = 30;
                        protected $gender = 'Female';

                        public function greet( string $name )
                        {

                            return 'Hello, Ms. ' . $name;
                        }

                    }
    );

echo '<pre>';

var_dump($female_user);