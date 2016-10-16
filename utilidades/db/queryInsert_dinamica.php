<?PHP
	// Listado de NOMBRES de los CAMPOS a Insertar
	$fields = array('symbol','planet','element');
	
	$placeholders = array();
	$values = array();
	
	foreach ($fields as $field)
	{
		// 1 placeholder por campo
		$placeholders[] = '?';
		// Supongo que los datos se obtienen de un formulario
		$values[] = $_POST[$field];
	}

	// Creando y Preparando la consulta SQL
	$query = 	'INSERT INTO zodiac (' .
					implode(',',$fields) .
				') VALUES (' .
					implode(',', $placeholders) .
				')';
	$st = $db->prepare();
	
	$st->execute($values);