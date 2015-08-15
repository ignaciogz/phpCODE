<?php
	/*
	**	Las expresiones regulares son patrones de búsqueda dentro de cadenas.
		Estos patrones se construyen mediante caracteres especiales que cumplen
		unas reglas determinadas.
	*/
?>
<?php
/*
	Como ejemplo vamos a intentar hacer un patrón que verifique si un correo
	electrónico está correctamente construido o no. Sería fácil pensar en
	una expresión parecida a la siguiente:
*/
		[a-z]+@[a-z]+\.org

/*
	La primera parte, [a-z] +, nos dice que aceptará una letra, o conjunto de
	letras, sin espacios y en minúsculas, que pueden corresponderse con el
	nombre de usuario de la cuenta de correo. Después aceptará un símbolo
	@, seguido de otro conjunto de caracteres, correspondientes al servidor de
	correo. La última parte de la expresión la componen los símbolos \ ., que
	indican que tiene que aparecer un punto que separe la descripción del
	servidor del dominio y la cadena o r g , que obliga a que todos los correos
	sean de dominio no gubernamental.
*/

/*
	La expresión anterior tiene algunas limitaciones, que veremos como solventar.
	La primera es que se puede aplicar a cualquier texto, con independencia
	del tamaño. Si en alguna parte de ese texto aparece un conjunto de
	caracteres que cumpla con la expresión, la validación sería true. Esto no es
	bueno cuando queremos chequear si un correo es introducido correctamente.
	La solución es aplicar las reglas de inicio y fin que obligan a que el
	comienzo de la cadena y el final sean parte de la expresión.
*/
	[a-z]+@[a-2]+\.org$

/*
	También podemos encontrarnos con que existen correos introducidos correctamente,
	pero el dominio es otro distinto a org. Esta vez la solución
	es introducir el operador O lógico |, que permite elegir entre varias opciones:
*/
	^[a-z]+@[a-z]+\.(org|com|net)$

/*
	Por último, un problema menor, aunque habitual en el ámbito de los correos
	electrónicos, es la utilización de signos de puntuación para separar
	nombres y apellidos y servidores de servidores virtuales. Por ejemplo, el
	correo siguiente es correcto, pero no sería evaluado por la expresión anterior:
	luís.cabezas@ncc.aupex.org
	Una posible solución es:
*/
	*[a-z|\.]+@[a-z|\.]+\.(org|com(net)$