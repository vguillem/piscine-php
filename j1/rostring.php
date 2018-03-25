#!/usr/bin/php
<?php
if ($argc > 1)
{
	$str = trim($argv[1]);
	while (strstr($str, "  "))
		$str = str_ireplace("  ", " ", $str);
	$tab = explode(" ", $str);
	$tmp = array_shift($tab);
	foreach($tab as $elem)
	{
		echo $elem;
		echo " ";
	}
	echo $tmp;
	echo "\n";
}
?>
