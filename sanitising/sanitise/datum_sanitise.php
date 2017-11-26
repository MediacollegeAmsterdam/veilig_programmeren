<?php

echo "<h1>Sanitised, validated variables: </h1>";
if(isset($_REQUEST["sanitise_this"]))
{
	$the_raw_input = substr($_REQUEST["sanitise_this"],0,512); 
	// max 512 chars
}else
{
	die("no input?");
}

$the_sanitised_input="";
$validates=false;
$validation_error="";

/* $the_raw_input is dirty */
/* Start code by student */

// sanitization
$the_sanitised_input = preg_replace('/[^0-9-]/', '', $the_raw_input); 

$validation_error="";
$ar=explode('-', $the_sanitised_input);
if(count($ar)==3)
{
	 list($y, $m, $d) = $ar;
	 if (checkdate($m, $d, $y)) {
			$validates=true;
	 } else {
		   $validation_error= "Niet geldige datum";
	 }
}else{
   $validation_error= "graag drie delen opgeven, in internationale codering: yyyy-mm-dd. LET OP: als je de date object gebruikt staat er voor Nederlandse computers dd-mm-jjjj, maar date input geeft de internationale codering door.";
}
	
/* en als je er echt wat mee wilt doen is dit wellicht handig:
$date = DateTime::createFromFormat('Y-m-d', $the_sanitised_input);
if($date!==false)
{
	$validates=true;
	echo date_format($date,"D, j-d-Y");
	echo "<br>";
	echo "<br>";
}else{
	$validation_error="PHP could not create a date from your input";
}
*/
/* End of code by student */
/* $the_sanitised_input is clean */

// print a nice rapport
echo "Sanitised value: <strong>'" . htmlentities($the_sanitised_input)."'</strong><br>";
if($validates)
{
	echo "Validated: <font color='green'>&#10003;</font><br>"; // checkmark
}else
{	
	echo "Validated: &#10060;"; // cross
	if($validation_error!="")
		echo ": ".$validation_error;
}


?>
