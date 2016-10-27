<?php


function show_layout(	$header,
						$content,
						$footer) 
{

    yield from show_header();
	yield '<p>' .$content . '</p>';

	yield '<p>' .$footer . '</p>';

	return '<script>alert("Página cargada");</script>';
    
}

function show_header()
{
	yield 'Button 1';
	yield 'Button 2';
	yield 'Button 3';

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