<?php
/*
	El objetivo es enviar a los usuarios que ingresan desde un smartphone o table
	a un sitio alternativo para esos dispositivos.
	O mostrarles contenido alternativo, optimizado para sus plataformas
*/

//Utilizando el Objeto retornado por la funcion get_browser() de PHP determino si es un navegador para dispositivos moviles
if ($browser->ismobilebrowser) {
	// agrego el contenido/CSS para dispositivos moviles
} else {
	// agrego el contenido/CSS para dispositivos de escritorio
}