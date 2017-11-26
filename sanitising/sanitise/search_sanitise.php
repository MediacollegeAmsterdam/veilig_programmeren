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

function Unaccent($string)
{
    if (strpos($string = htmlentities($string, ENT_QUOTES, 'UTF-8'), '&') !== false)
    {
        $string = html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|tilde|uml);~i', '$1', $string), ENT_QUOTES, 'UTF-8');
    }

    return $string;
}
// sanitization
$the_sanitised_input=Unaccent($the_raw_input); // remove accents and stuff, so you get more results.
// example of google search site:snoep.at +("test" + "") -test

$validation_error="No more validation possible, diacritics removed, try &euml;... example of valid google search: 'site:snoep.at +(\"test\" + \"\") -test'";
	
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
