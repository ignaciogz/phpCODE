<?php
$language = $_REQUEST['language'];
$valid_langs = array(
	'en_US' => 'US English',
	'en_UK' => 'British English',
	'es_US' => 'US Spanish',
	'fr_CA' => 'Canadian French');

// Supongo que existen clases definidas para cada idioma / Y realizo tareas de validacion:
if (isset($valid_langs[$language]) && class_exists($language)) {
	$lang = new $language; //Aplico variables/variables para resolver el problema
}