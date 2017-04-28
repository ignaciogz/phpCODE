<?php
// Example 9-3. Saving a file with file_put_contents()

$page = file_get_contents('page-template.html');

$page = str_replace('{page_title}', 'Welcome', $page);

if (date('H' >= 12)) {
	$page = str_replace('{color}', 'blue', $page);
} else {
	$page = str_replace('{color}', 'green', $page);
}

$page = str_replace('{name}', $_SESSION['username'], $page);

// Write the results to page.html
file_put_contents('page.html', $page);