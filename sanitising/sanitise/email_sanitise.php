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
$the_sanitised_input = filter_var($the_raw_input, FILTER_SANITIZE_EMAIL);

// validation
$place=preg_match('/#([a-f0-9]{3}){1,2}\b/i', $the_sanitised_input);
if(filter_var($the_sanitised_input, FILTER_VALIDATE_EMAIL))
{
	$validates=true;
}else
{
	$validation_error="not a valid email adress according to PHP..";
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
