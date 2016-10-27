<h1> Vista del Estudiante - Index</h1>
<?php
	while($datos = mysqli_fetch_array($datosObtenidos))
	{
		echo $datos['nombre'];
	} 