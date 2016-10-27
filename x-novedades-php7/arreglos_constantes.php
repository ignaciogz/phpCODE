<?php

define('CONFIG', [
					'localhost',
					'bpineda',
					'very_secret_password'
	]
	);

define('DB', [
					'HOST' => '127.0.0.1',
					'NAME'	=> 'course_php7',
					'USER'	=> 'bpineda'
	]
	);

echo '<pre>';
var_dump(CONFIG);
var_dump(DB);

echo DB['HOST'];

conecta_db(	DB['HOST'], 
			DB['NAME'], 
			DB['USER']);