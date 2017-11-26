<?php

echo "<h1>Sanitised, validated variables: </h1>";
if(isset($_REQUEST["sanitise_this"]))
{
	$the_raw_input = substr($_REQUEST["sanitise_this"],0,10); 

}else
{
	$the_raw_input = "off"; // if NOT given, the checkbox is default "off"!
}
$the_sanitised_input="";
$validates=false;
$validation_error="";

/* $the_raw_input is dirty */
/* Start code by student */

// sanitization
$the_sanitised_input = filter_var ( $the_raw_input, FILTER_SANITIZE_STRING);

// validation
$valid_values=array("true","false","on","off","1","0","yes","no");
$found = false;
foreach ($valid_values as $valid) {
	echo $the_sanitised_input ."===". $valid."?<br>";
  if ($the_sanitised_input === $valid) {
    $found = true;
//    break; // this is quicker, but for educational purposes we do it the slow way :)
  }
}
if($found) 
{
	$validated=true;
}else{
	$validation_error="checkbox truthy and falsy values can be ".json_encode($valid_values);
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
