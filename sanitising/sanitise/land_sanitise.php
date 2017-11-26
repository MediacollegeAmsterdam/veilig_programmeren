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
$the_sanitised_input= filter_var ( $the_raw_input, FILTER_SANITIZE_STRING); // mag van alles in een land zitten..

require_once("../land_options.php");
if (in_array($the_sanitised_input, $options)) {
		$validates=true;
	} else {
		$closest=0;
		$most_probable=-1;
		for($i=0;$i<count($options);$i++)
		{
			$dist=similar_text($the_sanitised_input,$options[$i])+similar_text(soundex($the_sanitised_input),soundex($options[$i]));
			if($dist>$closest)
			{
				$closest=$dist;
				$most_probable=$i;
			}
		}
		$validation_error="Invalid Country, bedoelde je wellicht ".$options[$most_probable]."?";
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
