<?php
class Tweet {
	protected $data;
	
	public function from($from) {
		$data['from'] = $from;
		return $this;
	}
	public function withStatus($status) {
		$data['status'] = $status;
		return $this;
	}
	public function inReplyToId($id) {
		$data['id'] = $id;
		return $this;
	}
	public function send() {
		// Generate Twitter API request using info in $data
		// POST https://api.twitter.com/1.1/statuses/update.json
		// with http_build_query($data)
		return $id;
	}
}

$tweet = new Tweet;
$id = $tweet->from('@ignaciogz')
	        ->withStatus('PHP 7 YEAH! #php')
	        ->send();

$reply = new Tweet;
$id2 = $reply->withStatus('I <3 Unicode!')
	         ->from('@pepito')
	         ->inReplyToId($id)
	         ->send();

/** FLUENT INTERFACE
	* Es una construcción orientada a objeto que define un comportamiento capaz de retransmitir
	* el contexto de la instrucción de una llamada subsecuente. Generalmente, el contexto es:
	*
	*	- Definido a través del valor de retorno de un método llamado
	*	- Autoreferencial, donde el nuevo contexto es equivalente al contexto anterior
	*	- Terminado por medio del retorno de un contexto vacío (void context).
*/

/*
	* BASICAMENTE: 
	*	Se invoca sucesivamente metodos de un objeto devuelto por otro metodo.

	* Es una buena idea utilizarlo con lenguajes bien definidos como el caso de SQL
	* o para el envio de mensajes. Como en el ejemplo anterior, tambien podria ser envio
	* de SMS o emails.
*/