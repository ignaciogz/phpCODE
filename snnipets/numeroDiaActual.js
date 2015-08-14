
function dayofyear(d)
// d is a Date object
{   
	var yn = d.getFullYear();
	var mn = d.getMonth();
	var dn = d.getDate();
	var d1 = new Date(yn,0,1,12,0,0); // noon on Jan. 1
	var d2 = new Date(yn,mn,dn,12,0,0); // noon on input date
	var ddiff = Math.round((d2-d1)/864e5);
	return ddiff+1;
}

var curdate=new Date(); // gets today's date
var cdnum=dayofyear(curdate);

if ( cdnum < 79) { season = "winter"; }
else if ( cdnum < 171) { season = "spring"; }
else if ( cdnum < 265) { season = "summer"; }
else if ( cdnum < 354) { season = "autumn"; }
else season = "winter";


//Aqui modifico dependiendo de la epoca del ano
$(".myObject").addClass(season);
