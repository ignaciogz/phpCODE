<?php
interface OutputInterface
{
  public function load();
}

class ArrayOutput implements OutputInterface
{
  public function load()
  {
  	return $data_array;
  }
}

class JsonOutput implements OutputInterface
{
  public function load()
  {
  	return json_encode($data_array);
  }
}

class Client
{
  private $output;
  public function setOutputType($outputType)
  {
  	$this->output = $outputType;
  }

  public function loadOutput()
  {
  	return $this->output->load();
  }

}

$client = new Client();
$client->setOutputType( new ArrayOutput() );
$data = $client->loadOutput();

$client->setOutputType( new JsonOutput() );
$json = $client->loadOutput();