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
if(isset($_REQUEST["override"]) && $_REQUEST["override"]!="")
{
	$the_raw_input = substr($_REQUEST["override"],0,56); 
}
$the_sanitised_input="";
$validates=false;
$validation_error="";

/* $the_raw_input is dirty */
/* Start code by student */

// sanitization
$the_sanitised_input=preg_replace('/^[a-zA-Z0-9_]*$/', $the_raw_input,"");

$options = array("Giraffe","Deer","Pig");
if (in_array($the_sanitised_input, $options)) {
		$validates=true;
	} else {
		$validation_error="Invalid Animal";
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
