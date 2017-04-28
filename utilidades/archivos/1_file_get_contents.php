<?php //Example 9-1. page-template.html for Example 9-2 ?>
<html>
<head><title>{page_title}</title></head>
<body bgcolor="{color}">
	<h1>Hello, {name}</h1>
</body>
</html>



<?php
//Example 9-2. Using file_get_contents() with a page template
$page = file_get_contents('page-template.html');

$page = str_replace('{page_title}', 'Welcome', $page);

if (date('H' >= 12)) {
	$page = str_replace('{color}', 'blue', $page);
} else {
	$page = str_replace('{color}', 'green', $page);
}

$page = str_replace('{name}', $_SESSION['username'], $page);

print $page;