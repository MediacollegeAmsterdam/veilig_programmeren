<?php

echo "<h1>Sanitised, validated variables: </h1>";
if(isset($_REQUEST["sanitise_this"]))
{
	$the_raw_input = substr($_REQUEST["sanitise_this"],0,20); 
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
if($the_raw_input[0]!="0")
{
	// format +31, add 0!
	$the_sanitised_input = "0".preg_replace('/[^0-9]/', '', substr($the_raw_input,3)); 
}else
{
	$the_sanitised_input = preg_replace('/[^0-9]/', '', $the_raw_input); 
}

$validation_error="";
if(strlen($the_sanitised_input)!=10) $validation_error.="In nederland bevatten nummers 10 cijfers!";

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
