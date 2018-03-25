#!/usr/bin/php
<?php
function ft_is_sort($str)
{
	$i = 0;
	$cpy = $str;
	sort($cpy);
	foreach($str as $elem)
	{
		if ($elem != $cpy[$i++])
			return (0);
	}
	return (1);
}
$test = array("aaa", "bbb", "ccc");
if (ft_is_sort($test))
	echo "YEEE\n";
else
	echo "NOOO\n";
$test2 = array("azz", "bbb", "ccc");
if (ft_is_sort($test2))
	echo "YEEE\n";
else
	echo "NOOO\n";
?>
