<?php

echo "<h1>Sanitised, validated variables: </h1>";
if(isset($_REQUEST["sanitise_this"]))
{
		$the_raw_input = substr($_REQUEST["sanitise_this"],0,512); 

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
$the_sanitised_input = preg_replace("/[^0-9]+/", "", $the_raw_input);

// validation
$intNummer = intval($the_sanitised_input); // dit gaat ervan uit, dat leerlingnummer NIET met 0 begint, klopt dat?

// als je feedback wilt geven op meerdere testen, kun je dat zo doen:
$validation_error="";
if (!filter_var($the_sanitised_input, FILTER_VALIDATE_INT) == true) $validation_error.="[geen int waarde volgens PHP]";
if (!($intNummer >= 0 && $intNummer <= 10 )) $validation_error.="[number is not between 1-10]";

if($validation_error=="")
{
	$validates=true;
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
