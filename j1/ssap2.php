#!/usr/bin/php
<?php
$j = 1;
$mytab = NULL;
while ($argc-- > 1)
{
	$str = trim($argv[$j]);
	while (strstr($str, "  "))
		$str = str_ireplace("  ", " ", $str);
	$tab = explode(" ", $str);
	if ($j > 1)
		$mytab = array_merge($mytab, $tab);
	else
		$mytab = $tab;
	$j++;
}
if ($mytab)
{
	sort($mytab);
	foreach($mytab as $elem)
	{
		if (ctype_alpha($elem))
		{
			echo $elem;
			echo "\n";
		}
	}
	foreach($mytab as $elem)
	{
		if (is_numeric($elem))
		{
			echo $elem;
			echo "\n";
		}
	}
	foreach($mytab as $elem)
	{
		if (!ctype_alpha($elem) && !is_numeric($elem))
		{
			echo $elem;
			echo "\n";
		}
	}
}
?>
