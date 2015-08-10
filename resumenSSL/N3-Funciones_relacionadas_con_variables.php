<?php
	/*
	**	Funciones relacionadas con variables
		• LINEA 15	isset();									
		• LINEA 25	unset();
		• LINEA 46	gettype();
		• LINEA 62	settype();
		• LINEA 88	empty();
		• LINEA 104	is_integer(); is_double(); is_string();
		• LINEA 116	intval(); doubleval(); strval();
	*/
?>
<?php
/*
**	Con esta función podemos averiguar si una función existe dentro de nuestro programa !
*/
	$DNI = "48.387.694";
	if (isset($DNI)) // Si existe devuelve true y si no existe false.
	{
		echo ("La variable DNI existe Wiii !!");
	}


/*
**	Libera la memoria ocupada por una variable, destruyendo su nombre y su contenido ! 
*/ 
	$Nombre = "María Fernanda";
	if (isset($Nombre))
	{
		echo ("El nombre existe!!!");
	}

	unset($Nombre) //Podemos comprobar qué pasa si liberamos la variable $Nombre
	
		if (isset($Nombre))
		{
			echo ("El nombre existe!!!");
		}
		else
		{
			echo ("El nombre ya no existe!!!");
		}


/*
**	Con esta función podemos averiguar el tipo de dato almacenado en la variable ! 
	Nos puede devolver uno de los siguientes valores:
		• integer
		• double
		• string
		• array
		• object
		• class
		• unknown type
*/
	$correo = "luis@nccextremadura.org";
	echo "la variable correo es del tipo: ";
	echo gettype($correo);


/*
**	Convierte el tipo de la variable al especificado en la función !
	El tipo debe especificarse eligiendo uno de los siguientes:
		• integer
		• double
		• string
		• array
		• object
**	Si la función no es capaz de convertir el tipo de la variable devuelve el valor false.
*/
	$correo = "luis@nccextremadura.org";
	
	if (settype($correo,"integer")) 
	{
		echo ("Variable correo convertida a Entero<br>");
	}
	else 
	{
		echo ("Imposible convertir al tipo Entero<br>") ;
	}
	
	echo ("Valor actual de correo es $correo");
	//Al tratar de convertir un tipo string (una cadena de caracteres) a un entero, PHP 5 comprueba si existe algún número.
	//Si no existe cambia el valor a O y la función settype() la evalúa como correcta.


/*
**	Comprueba si una variable está vacía, no existe, o su valor es 0 !
*/
	$correo = "luis@nccextremadura.org";
	if (empty($nombre))
	{
		echo ("La variable nombre no existe");
	}

	$numero_entero = O ;
	if (empty($numero_entero))
	{
		echo ("La variable numero_entero no existe o tiene el valor O") ;
	}


/*
**	Estas funciones devuelven true si la variable pasada coincide con el tipo que indica la función !
**	Si la variable $numero_entero se evalúa con la función is_integer(), devolverá true.
*/
	$numero_entero = 0;

	if (is_integer()($numero_entero))
	{
		echo ("numero_entero es del tipo integer");
	}


/*
**	Convierte el valor de una variable al tipo indicado en la función !
**	Esta función no permite la conversión a tipos object o array.
*/
	$cadena = "232";
	echo "El tipo de la variable cadena es".gettype($cadena)."<br>";
	
	$numero = intval($cadena); //Conversión de un tipo string a un integer
	echo ("el numero es $numero");