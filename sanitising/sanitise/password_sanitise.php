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
$the_sanitised_input = password_hash($the_raw_input,PASSWORD_DEFAULT); // levert 255 characters op!
// hashing dus harmless


$validation_error="UITZONDERING<BR><BR><strong>Je kunt helaas een password niet validaten<BR>";
$validation_error.="er wordt tegenwoordig afgeraden gebruikers te dwingen<BR>";
$validation_error.="tot lastig te onthouden passwords<BR>";
$validation_error.="door opnemen van vreemde tekens<BR>";
$validation_error.="We verbieden het niet, maar verplichten het ook niet!</strong><BR>";

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
