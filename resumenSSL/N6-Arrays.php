<?php
	/*
	**	Aspectos relacionados con Arrays:
	*/
?>
<?php
/*
**	Cuenta el número de elementos que contiene un array.
*/
	echo "elementos de 1 dimensión " . count ($colores) . "<br>";
	echo "elementos de 2 dimensiones " . count($colores["fuertes"]);

	//El ejemplo anterior se basa en la definición del array de colores inicializado antes. 
	//Para contar el número de elementos debe ponerse también la dimensión. 
	//Si el array es de una sola dimensión no hace falta. La función sizeof() actúa de la misma forma.



/*	
**	Busca dentro de un array un valor pasado como parámetro!
		si lo encuentra devuelve el valor true, si no, devuelve false. 
		Toma dos argumentos, el valor a buscar y el array dónde buscar.
*/
	$colores = array ("rojo","verde","amarillo","azul");
	if (in_array("rojo",$colores))
	{
		echo "Se ha encontrado el valor rojo";
	} else 
	{
		echo "No se ha encontrado";
	}



/*
**	Para borrar un elemento, 
	simplemente se utiliza la misma función que borra las variables definidas: unset().
*/
	$colores = array ("rojo","verde","amarillo","azul","rosa") ;
	echo "El número de elementos de colores es: " . count($colores) . "<br>";
	
	unset ($colores[2]);
	
	echo "El número de elementos de colores es: " . count($colores) . "<br>";

	// CUIDADO con utilizar unset() con el nombre de un array sin índice, 
	// pues esto causará el borrado del conjunto de datos en su totalidad. 
		// unset($colores) borra el array completo,
		// unset($colores [2] borra sólo el índice 2 del conjunto



/*
**	La función array_flip() intercambia los valores de índices y datos,
	es decir, los índices serán guardados como datos y los valores serán sus nuevos índices.
*/
	function recorre ($numero)
	{
		foreach ($numero as $indice => $valor)
		{
			echo "$indice: $valor<br>" ,-
		}
	}

	$numero = array("uno" => l,"dos" => 2, "tres" => 3,"cuatro" => 4);
	echo ("Números<br> " ) ;
	recorre($numero);
	echo ("Números intercambiados<br>") ;
	recorre(array_flíp{$numero));



/*
**	También es posible ordenar a la inversa una lista de datos. 
	Esto se consigue con la función array_reverse().
*/

/*
**	Si necesita alguna vez elegir un valor aleatorio de un array, 
	la función shuffle() puede ser de gran ayuda, 
	ya que mezcla todos los valores cada vez que se ejecuta. 

	Parte del código puede ser este:
*/
	echo ("Números mezclados<br> " ) ;
	
	shuffle($numero);
	recorre($numero);

/*
**	Array_push () permite insertar en la pila un dato y array_pop() extrae un valor. 

	Es necesario, antes que nada, definir la variable como array, pues ninguna de las funciones descritas lo hace.
	Array_push () y array_pop () toman como argumento la variable array	y los valores a introducir.
*/
	$pila = array();
	array_push($pila,"uno","dos","tres");
	array_push($pila,"cuatro","cinco");
	
	while($valor = arrayjop($pila) )
	{
		echo "valor extraído es $valor<br>";
	}