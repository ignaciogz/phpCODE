<?php
class Computer
{

  public $ram;
  public $hard_drive;
  public $monitor;
  public function __construct($ram, $hard_drive, $monitor)
  {
	$this->ram = $ram;
	$this->hard_drive = $hard_drive;
	$this->monitor = $monitor;
  }
}

class Ram
{
  //RAM size in GB
  private $size;
  public function __construct($ram_size)
  {
	$this->size = $ram_size;
  }
}

class HardDrive
{
  //HardDrive size in GB
  private $size;
  public function __construct($hard_drive_size)
  {
	$this->size = $hard_drive_size;
  }
}

class Monitor
{
  //Size in inches
  private $size;
  public function __construct($size)
  {
	$this->size = $size;
  }
}



/*
	* Creando una computadora sin aplicar el patron
*/
$my_computer = new Computer(new Ram(32), new HardDrive(500), new Monitor(40));


/*
	* Aplicando el patron Factory
	* La instanciacion de objetos secundarios, se realiza internamente
*/

class ComputerFactory{
  public static function create($ram_size, $hard_drive_size, $monitor_size)
  {
	$ram = new Ram($ram_size);
	$hard_drive = new HardDrive($hard_drive_size);
	$monitor = new Monitor($monitor_size);
	return new Computer($ram, $hard_drive, $monitor);
  }
}

$my_new_computer = ComputerFactory::create(12,1024,30);
