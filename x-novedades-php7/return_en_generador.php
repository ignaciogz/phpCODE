<?php


function show_layout(	$header,
						$content,
						$footer) 
{

    yield '<p>' .$header . '</p>';
	yield '<p>' .$content . '</p>';

	yield '<p>' .$footer . '</p>';

	return '<script>alert("Página cargada");</script>';
    
    

}


$header = 'Encabezado';
$content = 'Contenido';
$footer = 'Pie de página';

$generator = show_layout(	$header,
							$content,
							$footer);

foreach ($generator as $value) 
{

    echo "$value<br/>";

}

echo $generator->getReturn();