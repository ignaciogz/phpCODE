Convert .pdf files to .jpg using PHP and Image Magick
Here is a simple snippet to convert a .pdf file into a .jpg image. This is extremely useful if you need to generate preview images of your .pdf files. Please note, you must have the Image Magick extension installed on your server to use this snippet.

<?php
	$pdf_file   = './pdf/demo.pdf';
	$save_to    = './jpg/demo.jpg';     //make sure that apache has permissions to write in this folder! (common problem)

	//execute ImageMagick command 'convert' and convert PDF to JPG with applied settings
	exec('convert "'.$pdf_file.'" -colorspace RGB -resize 800 "'.$save_to.'"', $output, $return_var);


	if($return_var == 0) {              //if exec successfuly converted pdf to jpg
	    print "Conversion OK";
	}
	else print "Conversion failed.<br />".$output;
?>