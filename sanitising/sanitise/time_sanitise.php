<?php

echo "<h1>Sanitised, validated variables: </h1>";
if(isset($_REQUEST["sanitise_this"]))
{
		$the_raw_input = substr($_REQUEST["sanitise_this"],0,20); 

}else
{
	die("no input?");
}
if(isset($_REQUEST["override"]) && $_REQUEST["override"]!="")
{
	$the_raw_input = $_REQUEST["override"];
}

$the_sanitised_input="";
$validates=false;
$validation_error="";

/* $the_raw_input is dirty */
/* Start code by student */

// sanitization
$the_sanitised_input = preg_replace("/[^0-9:]/", "", $the_raw_input);

// validation
$intNummer = intval($the_sanitised_input); // dit gaat ervan uit, dat leerlingnummer NIET met 0 begint, klopt dat?

// als je feedback wilt geven op meerdere testen, kun je dat zo doen:
$validation_error="";
if (preg_match("/^(2[0-3]|[01]?[0-9]):[0-5][0-9]$/", $the_sanitised_input)!=1) $validation_error.="[regex failed]";
$parts=explode(":",$the_sanitised_input); //split op :
if(count($parts)!=2) $validation_error.="[please give hours:minutes]";
else{
	$hours=intval($parts[0]);
	$minutes=intval($parts[1]);
	if($hours<0 || $hours>24) $validation_error.="[invalid hour range]";
	if($minutes<0 || $minutes>60) $validation_error.="[invalid minutes range]";
}

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
