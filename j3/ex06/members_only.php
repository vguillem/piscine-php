<?php
if (($_SERVER['PHP_AUTH_USER'] != "zaz") || ($_SERVER['PHP_AUTH_PW'] != "j"))
{
	header('HTTP/1.0 401 Unautorized');
	header('WWW-Authenticate: Basic realm="Espace membres"');
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
}
else
{
	$file = file_get_contents('../img/42.png');
	echo "<html><body>\nBonjour Zaz<br />\n<img src='data:image/jpeg;base64,".base64_encode($file)."'>\n</body></html>\n";
}
