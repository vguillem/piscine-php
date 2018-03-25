#!/usr/bin/php
<?php
function ft_split($str)
{
	$tab = explode(" ", $str);
	sort($tab);
	return ($tab);
}
print_r(ft_split("Test 222 AAA cde"));
?>
