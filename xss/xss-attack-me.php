<!doctype HTML>
<html>
<head>
<style>
 code{
	 background:#F8F8FF; border:black dashed 1px; padding:6px;
	 margin: 5px;
	 display: block;
 }
</style>
</head>
<body>
<h1>OUTPUTTING XSS-DANGEROUS INPUT THE RIGHT WAY!</h1>
Your input was: 
<?php
function clean_for_output($encode,$addNull)
{ 
	$output="";
	$len=strlen($encode);
	for($i=0;$i<$len;$i++)
	{
		$output.="&#".ord($encode[$i]).";";
		if($addNull)$output.="\0";
	}
	return $output;
}	
require_once "proof.php"; 
?>
</body>
</html>