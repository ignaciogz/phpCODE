<?php
/*
	Antes de cualquier salidad por pantalla, se puede usar los headers para redireccionar la peticion a otra pagina.
	
	Es una buena practica invocar la funcion exit para evitar que se continue la ejecucion del script!
*/
	header('Location: http://www.example.com/confirm.html');
	exit();


	// Redireccionamiento con variables tipo GET
	header('Location: http://www.example.com/?monkey=turtle');
	exit();


/* 	
	Es una buena practica, redireccionar agregando a la URL el protocolo y el hostname.
	NO utilizar rutas relativas. Las redirecciones utilizando headers, solo pueden hacer uso de variable tipo GET.
	
	NO se puede redireccionar y utilizar variables tipo POST.
*/
	// Buena practica:
		header('Location: http://www.example.com/catalog/food/pemmican.php');
	// Mala practica:
		header('Location: /catalog/food/pemmican.php');



/*
	Con Javascript, se puede simular la redireccion por via POST, generando un formulario que sera enviado via POST, automaticamente.
*/?>
	<html>
	<body onload="document.getElementById('redirectForm').submit()">
		<form id='redirectForm' method='POST' action='/done.html'>
			<input type='hidden' name='status' value='complete'/>
			<input type='hidden' name='id' value='0u812'/>
			<input type='submit' value='Please Click Here To Continue'/>
		</form>
	</body>
	</html>



<?php
/*
	Tambien se puede redireccionar utilizando HTML con el siguiente codigo:

	<meta http-equiv="acción" content="segundos"; url="url destino" />
*/
?>
	<meta http-equiv="Refresh" content="5;url=http://www.google.com">



<?php
/*
	Tambien se puede redireccionar utilizando Javascript ya sea esperando unos instantes
	o directamente:
*/
?>
	<script type="text/javascript">
		function redireccionar(){
			window.location="http://www.google.com";
		} 
		setTimeout ("redireccionar()", 5000); 	//Tiempo expresado en milisegundos
	</script>


	<script type="text/javascript">
		window.location="http://www.google.com"; //Redireccion directa
	</script>