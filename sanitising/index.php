<!doctyp HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sanitising / Validation demo</title>
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Sanitising different user values by whitelisting</h1>
<h3>What do you want to sanitise?</h3>
<?php
	$files = glob(dirname(__FILE__) . "/forms/*_form.php");
	echo "<ul>";
	for($i=0;$i<count($files);$i++)
	{
		echo "<li>";
		echo '<a href="'."forms/".basename($files[$i]).'">';
		echo substr(basename($files[$i]),0,-9); // form_ eraf.. .php eraf
		echo "</a>";
		echo "</li>";
	}
	echo "</ul>";
?>
</body>
</html>