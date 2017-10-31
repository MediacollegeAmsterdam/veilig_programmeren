<!doctype HTML>
<html>
<head>
<style>
body{
	font-family: sans-serif;
	font-size: 2em;
}
input{
	font-family: sans-serif;
	font-size: 1.5em;
}
h1{
	font-size: 1.5em;
}

 code{
	 background:#F8F8FF; border:black dashed 1px; padding:6px;
	 margin: 5px;
	 display: block;
 }
 summary::-webkit-details-marker {
 color: #00ACF3;
 font-size: 125%;
 margin-right: 2px;
}
summary:focus {
	outline-style: none;
}

</style>
</head>
<body>
<h1>Waarom is XSS gevaarlijk? ZOEKPAGINA</h1>
Sorry, maar we konden uw zoekterm <span style="font-size: 1.5em; color: #5588ff;">
<?php
echo "'";
if(isset($_REQUEST["xssme"])) echo $_REQUEST["xssme"];
echo "'";
?>
</span>
 niet vinden.<br> Probeert u nog eens te zoeken met een andere zoekterm.
<hr>
<form style="text-align: center;">Zoek naar: 
	<input type="text" name="xssme" value='<?php if(isset($_REQUEST["xssme"])) echo $_REQUEST["xssme"]; ?>'/>
	<input type="submit" value="zoek"/>
</form>
<hr><br><br>
<details>
  <summary>code..</summary>
  DOE DIT NOOIT IN HET ECHTE LEVEN!<BR>
DIT IS DOMME CODE:<BR>
<code><pre>
Sorry, maar we konden: 
&lt?php
	echo "'";
	if(isset($_REQUEST["xssme"]))
	{
		echo $_REQUEST["xssme"];
	}
	echo "'";
?>
 niet vinden. Probeert u nog eens te zoeken  een andere zoekterm.

</pre></code>

</details><div>
</body>
</html>