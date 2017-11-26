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
		<h3>Password:</h3>
		<input id="pwd" type="password" style="width: 85%;" name="sanitise_this" /><button type="button" id="eye">
		<img src="https://cdn0.iconfinder.com/data/icons/feather/96/eye-16.png" alt="eye" />
		</button>
		<script>
			(function ()
			{
			function show() {
				var p = document.getElementById('pwd');
				p.setAttribute('type', 'text');
			}
			function hide() {
				var p = document.getElementById('pwd');
				p.setAttribute('type', 'password');
			}
			// modern browsers
			document.getElementById("eye").addEventListener("pointerdown", show, false);
			document.getElementById("eye").addEventListener("pointerup", hide, false);
			// older browers;
			document.getElementById("eye").addEventListener("mousedown", show, false);
			document.getElementById("eye").addEventListener("mouseup", hide, false);
			document.getElementById("eye").addEventListener("touchstart", show, false);
			document.getElementById("eye").addEventListener("touchend", hide, false);
			})();
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
	  Authors: Hjalmar Snoep, Maarten Kampmeijer 
   </body>
</html>
