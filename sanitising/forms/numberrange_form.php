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
		<h3>Number Range (1-10):</h3>
		<div class="column">
			<input name="range_input" type="range" value=5 min=1 max=10 step=1 onchange="updateTextInput(this.value);" oninput="updateTextInput(this.value);"></input>
		</div>
		<div class="column">
			<input type="text" id="sanitise_this" name="sanitise_this" value=5>
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
