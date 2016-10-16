<?PHP
	// Listado de NOMBRES de los CAMPOS a Actualizar
	$fields = array('symbol','planet','element');
	
	$update_fields = array();
	$update_values = array();
	
	foreach ($fields as $field)
	{
		$update_fields[] = "$field = ?";
		// Supongo que los datos se obtienen de un formulario
		$update_values[] = $_POST[$field];
	}
	
	// Creando y Preparando la consulta SQL
	$query = "UPDATE tablaDB SET " .
				implode(',', $update_fields) .
				'WHERE sign = ?';
	$st = $db->prepare($query);

	// Agrego que se debe actualizar en la consulta
	$update_values[] = $_GET['sign'];
	
	$st->execute($update_values);