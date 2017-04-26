<?php
session_start();

// Seteando la etapa actual
if (($_SERVER['REQUEST_METHOD'] == 'GET') || (! isset($_POST['stage']))) {
	$stage = 1;
} else {
	$stage = (int) $_POST['stage'];
}

// Validando que el valor de la etapa sea correcta
$stage = max($stage, 1);
$stage = min($stage, 3);

// Almacenando informacion de las etapas del formulario
if ($stage > 1) {
	foreach ($_POST as $key => $value) {
		$_SESSION[$key] = $value;
	}
}

include __DIR__ . "/stage-$stage.php";