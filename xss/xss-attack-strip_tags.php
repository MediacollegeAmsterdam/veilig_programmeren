<!doctype HTML>
<html>
<head>
<style>
 code{
	 background-color: #888;
	 color: #eee;
 }
</style>
</head>
<body>
<h1>OUTPUTTING XSS-DANGEROUS INPUT WITH STRIP_TAGS!</h1>
Your input was: 
<?php
function clean_for_output($encode,$addNull)
{ 
	$output=strip_tags($encode);
	return $output;
}	
?>

<?php require_once "proof.php"; ?>

</body>
</html>