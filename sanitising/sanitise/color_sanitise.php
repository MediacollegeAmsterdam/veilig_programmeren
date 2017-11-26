<?php

echo "<h1>Sanitised, validated variables: </h1>";
if(isset($_REQUEST["sanitise_this"]))
{
		$the_raw_input = substr($_REQUEST["sanitise_this"],0,50); 

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
$the_sanitised_input = preg_replace("/[^A-Za-z0-9#]/",'',$the_raw_input);

// validation
$place=preg_match('/#([a-f0-9]{3}){1,2}\b/i', $the_sanitised_input)
if($place==1)
{
	$validates=true;
}else
{
	$validation_error="only #xxxxxx #xxx supported";
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
