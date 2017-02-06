<?php
// Medida extra de seguridad contra ataques tipo XSS Reflejado/Almacenado.
echo "dato de salida saneado: ".htmlentities($dato);