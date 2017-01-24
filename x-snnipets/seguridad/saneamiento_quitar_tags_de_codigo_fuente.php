<?php
/*
	Es comun que algunos sitios permitan pedasos de codigo HTML por parte del usuario en comentarios, firmas o nombres de usuario. Pero ninguno de nosotros desea que un codigo JavaScript sea inyectado dentro de nuestro sitio mostrando informacion indeseada. Es por eso que algunos administradores optan por evitar cialquier tipo de situaciones que lleguen a comprometer la seguridad del sitio y eliminan cualquier tipo de lenguage dejando la entrada del usuario en texto plano.
*/
	$mensaje = "<h1 style="color:red;">Texto Plano</h1>";
	echo strip_tags($mensaje);
?>


<?php 
/*
	Y por supuesto que tambien puedes limitar los tags a cualquier cifra deseada, indicandolos dentro del segundo parametro de la funcion:
*/
	$mensaje = "<div>Ejemplo de texto <strong>resaltado</strong> con el tag 'strong'</div>";
	echo strip_tags($mensaje, "<strong><b>"); // "Ejemplo de texto <strong>resaltado</strong
