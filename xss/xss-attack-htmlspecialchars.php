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
<h1>OUTPUTTING XSS-DANGEROUS INPUT WITH HTML SPECIALCHARS!</h1>
Your input was: 
<?php
function clean_for_output($encode,$addNull)
{ 
	$output=htmlspecialchars($encode);
	return $output;
}	
?>

<?php require_once "proof.php"; ?>

</body>
</html>