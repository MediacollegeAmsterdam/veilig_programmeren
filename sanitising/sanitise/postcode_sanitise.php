<?php

echo "<h1>Sanitised, validated variables: </h1>";
if(isset($_REQUEST["sanitise_this"]))
{
	$the_raw_input = substr($_REQUEST["sanitise_this"],0,56); 
	// max 56 chars
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
$the_sanitised_input= preg_replace("/[^A-Z0-9]/i","",$the_raw_input); // weg met de spaties

$validation_error="";
if(strlen($the_sanitised_input)!=6) $validation_error.="[Postcode heeft 4 cijfers, 2 letters]";
$place=preg_match('/^[0-9]{4}[\s]{0,1}[a-z]{2}$/i',$the_sanitised_input);
if($place!=1)
{	
	$validation_error.="[regex failed..]";	
}else{
	$validates=1;
}


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
