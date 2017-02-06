<?php
// Saneamiento con LIKE
	$safe = $db->quote($_GET['searchTerm']);
	$safe = strtr($safe,array('_' => '\_', '%' => '\%'));
	$st = $db->query("SELECT * FROM zodiac WHERE planet LIKE $safe");


// Saneamiento NORMAL
	$safe = $db->quote($_GET['searchTerm']);
	$safe = strtr($safe,array('_' => '', '%' => ''));
	$st = $db->query("SELECT * FROM zodiac WHERE id = $safe");
