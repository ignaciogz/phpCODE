<?php
	$email = 'mail@example.com';
	$validation = filter_var($email, FILTER_VALIDATE_EMAIL);

	if ( $validation ) $output = 'proper email address';
	else $output = 'wrong email address';

	echo $output;
?>


<?php
	//Esta funcion no solo, no solo checkea el patron del email.
	//Tambien verifica si el host existe :D

	$email="test@geemail.com";
	if (isValidEmail($email))
	{
	       echo "Hooray! Adress is correct.";
	}
	else
	{
	       echo "Sorry! No way.";
	}

	//Check-Function
	function isValidEmail($email)
	{
	       //Perform a basic syntax-Check
	       //If this check fails, there's no need to continue
	       if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	       {
	               return false;
	       }

	       //extract host
	       list($user, $host) = explode("@", $email);
	       //check, if host is accessible
	       if (!checkdnsrr($host, "MX") && !checkdnsrr($host, "A"))
	       {
	               return false;
	       }

	       return true;
	}
?>


<?php
	function checkEmail($email)
	{
		if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email))
		{
	   		return true;
		}
		return false;
	}
?>


<?php
//Tambien se puede validar el nombre de dominio :P 
	function checkEmail($email)
	{
		if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email))
		{
		    list($username,$domain)=split('@',$email);
		    
		    if(!checkdnsrr($domain,'MX'))
		    {
		        return false;
			}
			
			return true;
		}
		return false;
	}
?>