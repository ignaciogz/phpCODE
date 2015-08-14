Create image data URIs using PHP
Instead of providing a traditional address to the image, the image file data is base64-encoded and stuffed within the src attribute. Doing so saves a network request for each image, and prevent exposure of directory paths. Please note that IE7 and below are not compatibles with data URIs.

<?php
	// A few settings
	$image = 'cricci.jpg';

	// Read image path, convert to base64 encoding
	$imageData = base64_encode(file_get_contents($image));

	// Format the image SRC:  data:{mime};base64,{data};
	$src = 'data: '.mime_content_type($image).';base64,'.$imageData;

	// Echo out a sample image
	echo '<img src="',$src,'">';
?>