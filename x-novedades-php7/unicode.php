<?php

//"\u{FE8F}" //b
//"\u{FEAE}" //r
//"\u{FED0}" //gh
//"\u{FEE4}" //m 
//"\u{FEDF}" //l 
//"\u{FE81}" //a 

//Some symbol \u{9999}
?>
<html>
	<script>
		//alert('<?php echo  "\u{9999}"; ?>');
		alert('<?php echo  
							"\u{FE81}" .
							"\u{FEDF}" .
							"\u{FEE4}" .
							"\u{FED0}" .
							"\u{FEAE}" .
							"\u{FE8F}" 
							; 
							?>');
	</script>

	<body>
	</body>
</html>