<?php
/*
** Mailto Automatico
*/
?>
<?php
	function mailtoA($email)
	{
		$mailto = eregi_replace('([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})','<a href="mailto:\\1">\\1</a>', $email);
		return $mailto;
	}
	