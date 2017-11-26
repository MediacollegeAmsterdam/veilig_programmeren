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
$the_sanitised_input=preg_replace('/^[a-zA-Z1-9]*$/', $the_raw_input,38);

$place = preg_match('/^[13][a-km-zA-HJ-NP-Z1-9]{25,34}$/', $the_raw_input);
$validation_error="";
if($the_sanitised_input[0]!="1" && $the_sanitised_input!="3")
{
	$validation_error.="[beginning with the number 1 or 3]";
}
if(strlen($the_sanitised_input)<25 || strlen($the_sanitised_input)>35)
{
	$validation_error.="[an identifier of 26-35 alphanumeric characters (".strlen($the_sanitised_input).")]";
}
if(strpos($the_sanitised_input,"O")!=FALSE)
{
	$validation_error.="[OIl0 detected in bitcoinadress]";
}
if(strpos($the_sanitised_input,"I")!=FALSE)
{
	$validation_error.="[OIl0 detected in bitcoinadress]";
}
if(strpos($the_sanitised_input,"1")!=FALSE)
{
	$validation_error.="[OIl0 detected in bitcoinadress]";
}
if(strpos($the_sanitised_input,"0")!=FALSE)
{
	$validation_error.="[OIl0 detected in bitcoinadress]";
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
