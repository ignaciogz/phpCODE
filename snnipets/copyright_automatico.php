<?php 
/*
**	Creando copyright actualizable y automatico
*/
?>
<?php 
	/* ---------------- SOLUCION 1 ---------------- */
		function auto_copyright($year = 'auto')
		{ 
		   	if(intval($year) == 'auto')
		   	{
		   		$year = date('Y');
		   	} 
		   	
			   	if(intval($year) == date('Y')){
			   		echo intval($year);
			   	} 
			   	elseif(intval($year) < date('Y')){
			   		echo intval($year) . ' - ' . date('Y');
			   	} 
			   	elseif(intval($year) > date('Y')){
			   		echo date('Y');
			   	} 
		}
		/* EJEMPLOS DE USO: */
		auto_copyright(); // 2011

		auto_copyright('2010');  // 2010 - 2011 
	?>



<?php
	/* ---------------- SOLUCION 2 ---------------- */
		$start_year = 2007;
		
		if ($start_year == date("Y"))
		{
			echo $start_year;
		} else
		{
			echo $start_year."-".date("Y");
		}
?>



<?php
	/* ---------------- SOLUCION 3 ---------------- */
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<p>Copyright © 
		<?php
			$start_year = "2010";
			$current_year=date("o");

			if ($current_year == $start_year)
			{
				echo $start_year;
			}
			else
			{
				echo "$start_year - $current_year"; 
			}
		?> 
		<acronym title="Ignacio Matias Gutierrez">IMG</acronym>. All rights reserved.</p>
	</body>
	</html>