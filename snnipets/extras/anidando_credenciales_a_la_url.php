<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="processing/ftp.php" method="post">
	<p><label for="ftp-company-name">Company</label><input type="text" name="ftp-company-name" id="ftp-company-name" /></p>
	<p><label for="ftp-user-name">User Name</label><input type="text" name="ftp-user-name" id="ftp-user-name" /></p>
	<p><label for="ftp-password">Password</label><input type="password" name="ftp-password" id="ftp-password" /></p>
	<p><input type="submit" id="ftp-submit" class="button" value="submit" /></p>
</body>
</html>




<?php
	/*
		Este archivo lee en las variables POST (si se establecen, "si existen"), construye la URL,
		y redirige a la misma. Falta el saneamiento de las variables POST con fines de seguridad.
	*/
    if (isset($_POST["ftp-company-name"] && isset($_POST["ftp-user-name"] && isset($_POST["ftp-password"]))
    //if (isset($_POST["ftp-company-name"], $_POST["ftp-user-name"], $_POST["ftp-password"]))
    {
        $company = $_POST["ftp-company-name"];
        $username = $_POST["ftp-user-name"];
        $password = $_POST["ftp-password"];
        
        $url = "ftp://$username:$password@ftp2.edgeconsult.com/$company";
        
        header( "Location: $url" ) ;   
    } else 
    {
        // do nothing   
    }
?>