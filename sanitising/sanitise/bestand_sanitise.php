<?php

echo "<h1>Sanitised, validated variables: </h1>";
if(isset($_FILES["sanitise_this"]))
{
	$the_raw_input = $_FILES["sanitise_this"];
}else
{
	die("no var give to sanitise?");
}
$the_sanitised_input="";
$validates=false;
$validation_error="";

/* $the_raw_input is dirty */
/* Start code by Hjalmar */

// sanitization
$the_sanitised_input = base64_encode($the_raw_input["tmp_name"]);

// validation
$validation_error="Je moet een filter schrijven voor iedere soort file, dit is een: ".$the_raw_input["type"];

/* End of code by Hjalmar  */
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
