7 little known but super useful PHP functions:
	* highlight_string()
	* str_word_count()
	* levenshtein()
	* get_defined_vars()
	* escapeshellcmd()
	* checkdate()
	* php_strip_whitespace()

PHP have lots of built-in functions, and most developers know many of them. 
But a few functions are not very well known, but are super useful.

<?php
	highlight_string()
	When displaying PHP code on a website, the highlight_string() function can be really helpful: 
	It outputs or returns a syntax highlighted version of the given PHP code using the colors
	defined in the built-in syntax highlighter for PHP.

	highlight_string('<?php phpinfo(); ?>');
	//Documentation: http://php.net/manual/en/function.highlight-string.php
?>


<?php
	str_word_count()
	This handy function takes a string as a parameter and return the count of words, 
	as shown in the example below.

	$str = "How many words do I have?";
	echo str_word_count($str); //Outputs 5
	//Documentation: http://php.net/manual/en/function.str-word-count.php
?>


<?php
	levenshtein()
	Ever find the need to determine how different (or similar) two words are? Then levenshtein() is just the function you need. This function can be super useful to track user submitted typos.

	$str1 = "carrot";
	$str2 = "carrrott";
	echo levenshtein($str1, $str2); //Outputs 2
	//Documentation: http://php.net/manual/en/function.levenshtein.php
?>


<?php
	get_defined_vars()
	Here is a handy function when debugging: It returns a multidimensional array containing a list
	of all defined variables, be them environment, server or user-defined variables, within the scope
	that get_defined_vars() is called.
	
	
	print_r(get_defined_vars());
	//Documentation: http://php.net/manual/en/function.get-defined-vars.php
?>


<?php
	escapeshellcmd()
	escapeshellcmd() escapes any characters in a string that might be used to trick a shell command
	into executing arbitrary commands. This function should be used to make sure that any data coming
	from user input is escaped before this data is passed to the exec() or system() functions, or to 
	the backtick operator.

	
	$command = './configure '.$_POST['configure_options'];

	$escaped_command = escapeshellcmd($command);
	 
	system($escaped_command);
	//Documentation: http://php.net/manual/en/function.escapeshellcmd.php
?>


<?php
	checkdate()
	Checks the validity of the date formed by the arguments. A date is considered valid if each parameter
	is properly defined. Pretty useful to test is a date submitted by an user is valid.


	var_dump(checkdate(12, 31, 2000));
	var_dump(checkdate(2, 29, 2001));

		//Output
		//bool(true)
		//bool(false)
	//Documentation: http://php.net/checkdate
?>


<?php
	php_strip_whitespace()
	Returns the PHP source code in filename with PHP comments and whitespace removed. 
	This is similar to using php -w from the commandline.

	// PHP comment here

	/*
		* Another PHP comment
	*/

	echo php_strip_whitespace(__FILE__);
	// Newlines are considered whitespace, and are removed too:
	do_nothing();
?>


<?php
	The output:
 	
 	echo php_strip_whitespace(__FILE__); do_nothing();
 	//Documentation: http://www.php.net/manual/en/function.php-strip-whitespace.php
?>