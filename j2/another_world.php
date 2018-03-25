#!/usr/bin/php
<?php
function	ft_nday($str)
{
	if ($str > 0 && $str < 32)
		echo $str;
	else
		echo "error";
}

function	ft_day($str)
{
	if (preg_match('/[Ll]undi/', $str))
		return (1);
	else if (preg_match('/[Mm]ardi/', $str))
		return (1);
	else if (preg_match('/[Mm]ercredi/', $str))
		return (1);
	else if (preg_match('/[Jj]eudi/', $str))
		return (1);
	else if (preg_match('/[Vv]endredi/', $str))
		return (1);
	else if (preg_match('/[Ss]amedi/', $str))
		return (1);
	else if (preg_match('/[Dd]imanche/', $str))
		return (1);
	else
		return (0);
}
if ($argc < 2)
	exit();
$tab = explode(" ", $argv[1]);
if ($tab[0] && ft_day($tab[0]))
{
	if ($tab[1] && ft_nday($tab[1]) != 0)
	{}
}
?>
