<!doctype html>
<html>
   <head>
   <meta charset="utf-8" /> 
	<title>Sanitising different user values by whitelisting</title>
      <link rel="stylesheet" type="text/css" href="../style.css">
   </head>
   <body>
	<?php
		$what=substr(basename(__FILE__),0,-9);
	?>
      <h1>Sanitising <?php echo $what;?></h1>
	  <a href="../index.php">Iets anders sanitizen?</a>
	  <?php 
		$action="sanitise/".$what."_sanitise.php";
		?>
		
	  <!-- begin dit mag je veranderen -->
	  
      <form action="../<?php
		echo $action;
	  ?>" method="POST" target='test' enctype="multipart/form-data">
		<h3>Dit is een checkbox, probeer er maar wat gemeens in te stoppen:</h3>
		<input name="sanitise_this" type="checkbox" checked></input>
		<input type="submit"></input>
      </form>
	  
	  <!-- einde dit mag je veranderen -->
	  
	  <div class="column">
		  <h3>Resultaat sanitization:</h3>
		  <iframe name='test' id='test'></iframe>
	  </div>
	  <div class="column">
	  <h3>The code (<?php echo $action; ?>):</h3>
	  <iframe src="
	    <?php 
		echo "../highlight.php?file=".$action;
		?>
	  "></iframe>
	  </div>
	  <!-- en dan mag je hier je naam bij zetten :) -->
	  Authors: Hjalmar Snoep, Noa
   </body>
</html>
