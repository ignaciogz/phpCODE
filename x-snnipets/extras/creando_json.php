<?php
/*
	Ya se que trabajas con moviles o AJAX, la manera mas facil de entregar datos es mediante objetos json. Para esto PHP nos ofrece una funcion con la cual podemos convertir arreglos simples en objetos json.
*/
	$arreglo = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);  
	echo json_encode($arreglo);
?>