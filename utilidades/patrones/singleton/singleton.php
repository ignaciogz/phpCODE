<?php
class DBMock
{
  private static $instance;
  protected function __construct()
  {
    echo 'Connecting to a DB';
  }

  public static function getInstance()
  {
    if( static::$instance === null )
    {
      static::$instance = new static();
      echo 'Creando nueva instancia';
    }
    return static::$instance;
  }

  private function __clone()
  {

  }

}

class DBEngine extends DBMock
{

}

$instanceDBEngine = DBMock::getInstance();
var_dump( $instanceDBEngine === DBMock::getInstance() );

$instanceDBEngine2 = DBEngine::getInstance();
var_dump( $instanceDBEngine === $instanceDBEngine2 );