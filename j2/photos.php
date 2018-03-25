#!/usr/bin/php
<?php
function get_img($str, $i)
{
	$ch = curl_init($str);
	$result = fopen($i, 'wb');

	curl_setopt($ch, CURLOPT_FILE, $result);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_exec($ch);
	curl_close($ch);
	fclose($result);
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $argv[1]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Le blog de samy Dindane (www.dinduks.com)');
$result = curl_exec($ch);
curl_close($ch);
echo $result;
preg_match_all('/img.{0,}src=[\'|\"][^\'|\"]/', $result, $matches);
foreach($matches[0] as $tmp)
{
	$i = 1;
	preg_match_all('/http[^\ ]{0,}/', $tmp, $mat);
	foreach($mat[0] as $tmp2)
		get_img($tmp2, $i++);
}


/*
	$line = preg_replace_callback('/img.{0,}>/', function ($matches){
		return(preg_replace_callback('/src=[\'|\"][^\'\"]{0,}/', function ($matches){
		return(strtoupper($matches[0]));
		}, $matches[0]));
		}, $line);
echo $result;*/
?>
