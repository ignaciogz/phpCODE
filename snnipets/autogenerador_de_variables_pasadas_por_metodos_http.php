<?php
/*
** Creando variables y obteniendo los datos en base a los strings del array
*/
	$expected=array('username','age','city','street');
	foreach($expected as $key){
	    if(!empty($_POST[$key])){
	        ${key}=$_POST[$key];
	    }
	    else{
	        ${key}=NULL;
	    }
	}