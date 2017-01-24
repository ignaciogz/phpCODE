<?php
	//Get Remote IP Address in PHP
	function getRemoteIPAddress() {
	    $ip = $_SERVER['REMOTE_ADDR'];
	    return $ip;
	}

	//The above code will not work in case your client is behind proxy server. 
	//In that case use below function to get real IP address of client.
	function getRealIPAddr()
	{
	    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
	    {
	        $ip=$_SERVER['HTTP_CLIENT_IP'];
	    }
	    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
	    {
	        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	    }
	    else
	    {
	        $ip=$_SERVER['REMOTE_ADDR'];
	    }
	    return $ip;
	}
?>