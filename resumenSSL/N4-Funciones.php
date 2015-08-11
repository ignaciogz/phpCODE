<?php
	/*
	**	Aspectos relacionados con funciones:
	*/
?>
<?php
/*
**	Parámetros INSUFICIENTES
	Si llama a una función con menos parámetros de los que debe utilizar por definición aparecerá el siguiente error por defecto:
*/
	echo "Warning: Missing argument";



/*
**	Parámetros en EXCESO
	Serán omitidos y la ejecución continuará !
	Normalmente sin ningún mensaje de error.
*/
	echo ("Esta propiedad de PHP 5 permite utilizar variables con un número de parámetros variable");



/*
**	Variables ESTATICAS
	Por defecto, las funciones que creamos en PHP 5 no retienen en memoria el valor de las variables que se utilizan. 
	Cada llamada a una función implica la nueva creación de las variables locales con su valor inicial. 
	La declaración static añadida a una variable soluciona este problema:
*/
	function contador() {
		static $contador = 0;
		
		$contador = $contador +1;
		return $contador;
	}
	
	for ($x = 1; $X <= 100; $x++) {
		echo contador() ." , ";
	}



/*
**	Funciones con número de ARGUMENTOS VARIABLES
	Hay tres formas de hacer esto en PHP:
		• Definiendo la función con argumentos por defecto.
		• LINEA 48 Usando un array para pasar las variables.
		• LINEA 72 Usando las funciones de argumento variable func_num_args (), func_get_arg() y func_get_args()
*/

	/*
	**	Argumentos mediante un array
		El ejemplo siguiente usa esta estrategia y algunos trucos más, como el operador ternario y los array asociativos:
	*/
	function capitales($datos)
	{
		$Pais = isset ($datos['Pais' ] ) ? $datos ['Pais'] : "España";
		$Capital = isset ($datos['Capital'] ) ? $datos ['Capital'] : "Madrid";
		$habitantes = isset ($datos['habitantes'] ) ? $datos['habitantes'] : "muchos";
		
		return ("La capital de $Pais es $Capital y tiene $habitantes habitantes.<br>");
	}

		// Introducimos en el array los datos uno por uno para que sea más fácil de entender
		$datos ['Pais'] = "España";
			echo capitales($datos);
		$datos ['Pais'] = "Portugal";
		$datos ['Capital'] = "Lisboa";
			echo capitales($datos);
		$datos ['Pais'] = "Francia";
		$datos ['Capital'] = "Paris",
		$datos ['habitantes'] = "muchísimos";
			echo capitales($datos);

	/*
	**	Múltiples argumentos con func_num_args()
		
		Son muy similares al lenguaje C:
			• func_num_args(): Devuelve el número de argumentos que recibe la función desde la que es llamada.
			• func_get_arg(): Devuelve uno a uno los argumentos pasados de la siguiente	forma: func_get_arg(0), func_get_arg(l), func_get_arg(5).
			• func_get_args(): Devuelve un array con todos los argumentos pasados a la función, con los índices del array empezando desde 0.
			
			Cualquiera de estas funciones dará un error si son llamadas fuera del entorno de una función,
			y func_get_arg() , producirá un fallo si es llamada con un número más alto que los argumentos que se reciben.
			
			Las funciones anteriores dan una ventaja a largo plazo, ya que si,
			durante el período de vida de una función necesita añadir algún argumento más,
			puede capturar sin necesidad de cambiar el código de las llamadas o el de definición de la función.
	*/
	function capitales()
	{
		$numero_argumentos = func_num_args();
		
		$Pais = $numero_argumentos > 0 ? func_get_arg(0) : "España";
		$Capital = $numero_argumentos > 1 ? func_get_arg(1) : "Madrid";
		$habitantes = $numero_argumentos > 2 ? func_get_arg (2) : "muchos " ;
		
		return ("Número de argumentos es: $numero_arguraentos. La capital de $Pais es $Capital y tiene $habitantes habitantes.<br>");
	}
	echo capitales();
	echo capitales("Portugal", "Lisboa");
	echo capitales("Francia", "Paris", "muchísimos");
	
	//Los argumentos deben ser pasados en un lugar determinado, sino la función no hará bien su trabajo.
	//Utilizar los parámetros como array, es el método más flexible y el más utilizado en los programas PHP !!

	//Aún así, es muy útil cuando no sepa cuántos datos necesita manejar una función. 
	//Podemos utilizarlo para funciones que sumen todos los parametros que introduzca o concatenen todas las palabras, como el ejemplo siguiente:
	function concatenar() {
		$resultado = "" ;
		$numero_argumentos = func_num_args();
		$array_parametros = func_get_args();
		
		for ($x = 0; $x <= $numero_argumentos; $x++)
		{
			$resultado = $resultado . $array_parametros[$x] ;
		}
		
		return $resultado."<br>" ;
	}
	echo concatenar("Hola ","Mundo");
	echo concatenar("Esto ","es ","una ","prueba ","de","la potencia"," de este"," método");



/*
**	Llamadas por REFERENCIA
	
	PHP 5 ofrece actualmente dos caminos diferentes para cambiar sus argumentos: 
		En la definición de la función y en la llamada a la misma.
	Las variables pasadas por referencia pueden ser modificadas durante el proceso de una llamada,
	porque lo que se pasa no es una copia, sino la variable en sí misma.
	
	Para pasar variables por referencia hay que utilizar el operador (&) delante de la variable.
*/
	function &elevado(&$numero,&$indice)
	{
		$resultado = $numero;
		for ($x = $índíce; $x > 0; $x--)
		{
			$resultado = $resultado * $numero;
		}
		$numero = $resultado;
		return $numero; //Para devolver la referencia hay que agregar &, al principio del identificador de la funcion
	}
	
	$numero = 2 ;
	$índice = 5;
	
	echo $numero." elevado a ".$indice." es igual a" .elevado($numero,$ indice) ."<br>";
	echo $numero." elevado a ".$indice." es igual a".elevado($numero,$ indice) ."<br>";



/*
**	REFERENCIA a variables
	
	Las referencias pueden usarse también fuera de las funciones, en el ámbito
	de las variables. 

	El ejemplo siguiente muestra cómo trabaja el operador (&) con las variables:
*/
	$nombre = "Luis Miguel";
	$apellídos = "Cabezas Granado";

	$nombre_auxiliar = $nombre; //$nombre auxiliar es simplemente una copia de $nombre
	//$nombre_referencia es una referencia a la variable
	$nombre_referencia = &$nombre;
	echo $nombre." " . $apellidos."<br>" ;
	$nombre_auxiliar = "Alberto";
	echo $nombre. " " . $apellidos."<br>" ;
	$nombre_referencia = "Felipe";
	echo $nombre." " . $apellidos."<br>" ;

	//$nombre__auxiliar es una copia de la variable $nombre y por mucho	que la cambiemos, 
	//$nombre permanecerá con el mismo valor. En cambio, la variable $nombre_referencia es un alias de $nombre,
	//por lo tanto todos los cambios que se hagan en cualquiera de las dos variables les afectará por igual.



/*
**	Funciones Variables
	
	Uno de los trucos que se pueden hacer con PHP es utilizar variables para
	almacenar el nombre de funciones. Si una variable almacena el nombre de
	una función, simplemente tendrá que añadir unos paréntesis al final de la
	variable para hacer la llamada correctamente.
*/
	function saludo_maniana()
	{
		return ("Buenos Días");
	}
	function saludo_tarde()
	{
		return ("Buenas Tardes");
	}
	function saludo_noche()
	{
		return ("Buenas Noches");
	}
	
	$horario = "tarde";
	$funcion_variable = "saludo_".$horario;
	echo $funcion_variable() ;
	