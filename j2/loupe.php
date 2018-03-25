#!/usr/bin/php
<?php
if ($argc < 2)
	exit();
if (($file = fopen($argv[1], 'r+')) == false)
	exit();
while (!feof($file))
{
	$line = fgets($file);
	$line = preg_replace_callback('/title=\"[^\"]{0,}\"/', function ($matches){
		return(preg_replace_callback('/\"[^\"]{0,}\"/', function ($matches){
		return(strtoupper($matches[0]));
		}, $matches[0]));
		}, $line);
	$line = preg_replace_callback('/<a.{0,}(<\/a>)/', function ($matches){
		return(preg_replace_callback('/>[^<]{0,}</', function ($matches){
		return(strtoupper($matches[0]));
		}, $matches[0]));
		}, $line);
	echo $line;
}

fclose($file);
?>
