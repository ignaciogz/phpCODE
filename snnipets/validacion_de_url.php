<?php
	$url = 'http://example.com';
	$validation = filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_HOST_REQUIRED);

	if ( $validation ) $output = 'proper URL';
	else $output = 'wrong URL';

	echo $output;
?>