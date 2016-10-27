<?php
class User {private $age = 30;}

$user_age = function(){ return $this->age; };

echo $user_age->call(new User);