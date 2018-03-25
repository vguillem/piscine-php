#!/usr/bin/php
<?php
if ($argc == 2)
{
	$str = trim($argv[1]);
	$tab = sscanf($str, "%d %c %d %s");
	if (($tab[0] || $tab[0] == 0) && $tab[1] && ($tab[2] || $tab[2] == 0) && !$tab[3])
	{
		if ($tab[1] == "+")
			echo $tab[0] + $tab[2];
		if ($tab[1] == "*")
			echo $tab[0] * $tab[2];
		if ($tab[1] == "/")
			echo $tab[0] / $tab[2];
		if ($tab[1] == "%")
			echo $tab[0] % $tab[2];
		if ($tab[1] == "-")
			echo $tab[0] - $tab[2];
	}
	else
		echo "Syntax Error\n";
}
else
	echo "Incorrect Parameters\n"
?>
