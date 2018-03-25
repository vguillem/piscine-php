#!/usr/bin/php
<?php
$i = 0;
if (count($argv) < 2)
	return ;
$j = strlen($argv[1]);
while ($i < $j && $argv[1][$i] == ' ')
	$i++;
while ($i < $j && $argv[1][$i] != ' ')
	echo $argv[1][$i++];
while ($i < $j)
{
	while ($i < $j && $argv[1][$i] == ' ')
		$i++;
	if ($i < $j && $argv[1][$i])
		echo " ";
	while ($i < $j && $argv[1][$i] != ' ')
		echo $argv[1][$i++];
}
echo "\n";
?>
