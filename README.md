# veilig_programmeren
Coop code base en onderzoeken van leerlingen en docenten van het MediaCollege voor beveiliging.


## Sanitising
http://snoh.hosts.ma-cloud.nl/vakken/vp/week2/sanitising/form.html

 - LET OP met de .htaccess.. Ik mag dat niet in github zetten: https://github.com/owncloud/core/issues/6188 Je kunt zelf de files renamen in php-logging en stats, om ook voorbeeld 3 te laten werken.

## Logging
Geen online voorbeeld.

## XSS
http://snoh.hosts.ma-cloud.nl/vakken/vp/week5/xss-attack-me.php

### preventie en ernst
- https://excess-xss.com/
- https://www.owasp.org/index.php/DOM_Based_XSS
- https://www.owasp.org/index.php/XSS_Filter_Evasion_Cheat_Sheet#Embedded_tab
- https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)
- https://gist.github.com/kurobeats/9a613c9ab68914312cbb415134795b45
- https://brutelogic.com.br/blog/xss-without-event-handlers/
- https://stackoverflow.com/questions/22395316/xss-without-html-tags
- https://www.owasp.org/index.php/Testing_for_Reflected_Cross_site_scripting_(OTG-INPVAL-001)#Example_1
- https://stackoverflow.com/questions/1873793/html-encode-in-php
- https://www.dionach.com/blog/the-real-impact-of-cross-site-scripting

### Online pen-test tools (niet bijster betrouwbaar natuurlijk)
 - https://pentest-tools.com/home
 - https://www.tinfoilsecurity.com/free_scan/sites/http-www-snoep-at/scans/se1509413723207200006
 - http://iseebug.com/XSSOnline/
 - http://xss-scanner.com/

### Free pen-test tools
 - https://www.owasp.org/index.php/OWASP_Zed_Attack_Proxy_Project
 - http://www-03.ibm.com/software/products/en/appscan (free trial)

