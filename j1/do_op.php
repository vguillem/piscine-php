#!/usr/bin/php
<?php
if ($argc == 4)
{
	$nb1 = trim($argv[1]);
	$sig = trim($argv[2]);
	$nb2 = trim($argv[3]);
	if ($sig == "+")
		echo $nb1 + $nb2;
	if ($sig == "*")
		echo $nb1 * $nb2;
	if ($sig == "/")
		echo $nb1 / $nb2;
	if ($sig == "%")
		echo $nb1 % $nb2;
	if ($sig == "-")
		echo $nb1 - $nb2;
}
else
	echo "Incorrect Parameters\n"
?>
