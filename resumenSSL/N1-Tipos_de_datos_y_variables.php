<?php
	/*
	**	EJEMPLOS GENERALES, de tipos de datos y variables.
	*/
?>
<?php
//Asignación de números enteros, de coma flotante y cadenas de caracteres:
	$numero_entero = 12343;
	$numero_flotante = 12343.123;
	$cadena_caracter = "12 34 3";
//Asignación de los tipos especiales boolean y NULL:
	$verdadero = TRUE;
	$vacio = NULL;
//Esta línea da error, el nombre de variable no puede comenzar con un Numero:
//$4numero = 23;
	$_numero = 45;


/*
**	Las líneas siguientes muestran que PHP 5 es sensible a mayúsculas:
*/
	$numero = 23;
	$NUMERO = 24;
	$Numero = 25;
echo ("numero es: $numero<br />") ;
echo ("NUMERO es: $NUMERO<br />" ) ;
echo ("Numero es: $Numero<br />") ;


/*
**	Las líneas siguientes muestran ejemplos de Numeros enteros:
*/
	$entero_baselO = 1234;
	$entero_base8 = 01234;
	$entero_basel6 = 0x1234;
	$entero_negativo = -1234;
echo ("Decimal: $entero_baselO<br />") ;
echo ("Octal: $entero_base8<br />") ;
echo ("Hexadecimal: $entero_basel6<br />") ;
echo ("Negativo: $entero_negativo<br />") ;


/*
**	Números de coma flotante:
*/
	$numero__double = 1234.123;
	$numero_double2 = 0.1213;
	$numero_double3 = -12 3 4.0;
echo ("Salida de la función echo(): $numero_double3<br>") ;


/*
**	Parece que el número que se muestra en pantalla es del tipo entero.
**	Esto es porque la función echo 0  "NO muestra el formato" del dato.
**	Para que esto ocurra debemos utilizar otro tipo de función:
*/
	$numero_double3 = -1234.0;
echo ("Salida de printft): " ) ;
printf("%f","$numero_double3");


/*
**	Ejemplo de variables variables:
*/
	$variablel = "hola";
	$$variablel = "mundo";
echo ("$variablel $$variablel<br>") ;
echo ("$variablel $hola<br>");