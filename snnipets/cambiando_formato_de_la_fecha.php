<?php
/**
* @name Date Change Format
* @note PHP > 5.3
* @params date, from date format, to date format
* @use date_change_format()
*/
	function date_change_format($setDate, $from=’Y-m-d’, $to=’d/m/Y’) {
		if($setDate != '')
		{
			$date = DateTime::createFromFormat($from, $setDate);
			return $date->format($to);
		}
		else 
		{
			return $setDate;
		}
	}



/* ---------------- SOLUCION 2 ---------------- */
	date(‘Y-m-d’, strtotime(’23/10/2009′));



/* ---------------- SOLUCION 3 ---------------- */
	implode(‘-‘, array_reverse(explode(‘/’,$date)));
	//Esta forma, elimina el problema del 1970 del timestamp



/* ---------------- SOLUCION 4 ---------------- */
$date_array = explode("/",$date); // split the array
$var_day = $date_array[0]; //day seqment
$var_month = $date_array[1]; //month segment
$var_year = $date_array[2]; //year segment
$new_date_format = "$var_year-$var_day-$var_month"; // join them together



/* ---------------- SOLUCION 4 ---------------- */
/**
* @param string $date (d.m.y, y-m-d, y/m/d)
* @return string|bol
*/
	function convertDate($date) {
	//Convert date from YYYY/MM/DD to DD.MM.YYYY (and from DD.MM.YYYY to YYYY/MM/DD)
       // EN-Date to GE-Date
       if (strstr($date, "-") || strstr($date, "/")){
               $date = preg_split("/[\/]|[-]+/", $date);
               $date = $date[2].".".$date[1].".".$date[0];
               return $date;
       }
       // GE-Date to EN-Date
       else if (strstr($date, ".")){
               $date = preg_split("[.]", $date);
               $date = $date[2]."-".$date[1]."-".$date[0];
               return $date;
       }
       return false;
	}