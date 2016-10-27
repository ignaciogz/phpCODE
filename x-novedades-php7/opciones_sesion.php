<?php
session_start([
		'cache_limiter' => 'private',
		'cache_expire' => 60,
		'name' => 'nuevo_nombre_de_sesion'
	]);

echo '<pre>';

var_dump(session_name());
var_dump(session_cache_limiter());
var_dump(session_cache_expire());