<?php
$file=$_REQUEST["file"];

// beveiliging is laagjes!
$file = basename($file); 

// now sanitise the heck out of this.
$file = preg_replace("/[^a-zA-Z0-9_\.]+/", "", $file);

$file= "sanitise/".$file;

if(substr($file,-4)!=".php")
	die ("sorry, not a php file. '".htmlentities($file)."'");
if(is_file($file))
{
	// validated!
	$file=file_get_contents ($file);
	$start=strpos($file,'/* $the_raw_input is dirty */');
	$end=strpos($file,'/* $the_sanitised_input is clean */');
	if($start!==false && $end !==false)
		highlight_string ('<?php'.PHP_EOL.'$the_raw_input = $_REQUEST["sanitise_this"];'.PHP_EOL.' '.substr($file,$start,$end).PHP_EOL.'?>');
	else 
		echo "Exception";
}else
{
	die("sorry, not a valid file. '".htmlentities($file)."'");
}
?>