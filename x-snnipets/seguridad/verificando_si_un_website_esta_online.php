​<?php  
	function urlUP($url)
	{
		//Validate the URL first!
		if(filter_var($url,FILTER_VALIDATE_URL))
		{	
			$handle = curl_init(urldecode($url));
				curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
               	curl_setopt($curlInit,CURLOPT_HEADER,true);
               	curl_setopt($curlInit,CURLOPT_NOBODY,true);
               	curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);
			$response = curl_exec($handle);
			$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
			
			if($httpCode >= 200 && $httpCode < 400)
			{
				return true;
			}else{
				return false;
			}
			
			curl_close($handle);
		}
	}


/*
	This is the function we will be actually using, Lets break it down!

	We validate the URL through filter_var().
	Open the cURL handle for our URL.
	Set option in cURL to receive the incoming.
	Execute the handle.
	Get the HTTP code response for the executed handle.
	If HTTP Response code is greater than or equal to 200 (200 stands for Ok) or its shorter than 400, this means website is up, return true.
	Else return false,so that means the website is down.
	Close the cURL handle!
	To use the function you have to do the following:
*/
	if urlUP("http://google.com"){
	    echo "The website is currently UP!";
	}else{
	    echo "The website is Down!";
	}