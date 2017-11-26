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
	  <a href="../index.php">Iets anders sanitatizen?</a>
	  <?php 
		$action="sanitise/".$what."_sanitise.php";
		?>
		
	  <!-- begin dit mag je veranderen -->
	  
      <form action="../<?php
		echo $action;
	  ?>" method="POST" target='test'>
		<div class="column">
		<h3>Time:</h3>
		<input type="time" name="sanitise_this" />
		</div>
		<div class="column">
		<h3>Override (hacker):</h3>
		<input type="text" value="" name="override" />
		</div>
		<script>
			function updateTextInput(val) {
			  document.getElementById('sanitise_this').value=val; 
			}
		</script>
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
	  Authors: Hjalmar Snoep, Mark van Dorremaal
   </body>
</html>
