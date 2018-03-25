#!/usr/bin/php
<?php
function	ft_nday($str)
{
	if ($str > 0 && $str < 32)
		return (1);
	else
		return (0);
}

function	ft_month($str)
{
	if (preg_match('/[Jj]anvier/', $str))
		return (1);
	else if (preg_match('/[Ff]evrier/', $str))
		return (2);
	else if (preg_match('/[Mm]ars/', $str))
		return (3);
	else if (preg_match('/[Aa]vril/', $str))
		return (4);
	else if (preg_match('/[Mm]ai/', $str))
		return (5);
	else if (preg_match('/[Jj]uin/', $str))
		return (6);
	else if (preg_match('/[Jj]uillet/', $str))
		return (7);
	else if (preg_match('/[Aa]out/', $str))
		return (8);
	else if (preg_match('/[Ss]eptembre/', $str))
		return (9);
	else if (preg_match('/[Oo]ctobre/', $str))
		return (10);
	else if (preg_match('/[Nn]ovembre/', $str))
		return (11);
	else if (preg_match('/[Dd]ecembre/', $str))
		return (12);
	else
		return (0);
}

function ft_years($str)
{
	if (preg_match('/^[0-9][0-9][0-9][0-9]$/', $str))
		return ($str);
	else
		return (-1);
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

function	ft_time($str)
{
	$time = explode(":", $str);
	if (count($time == 3))
	{
		if ($time[0] >= 0 && $time[0] <= 23)
		{
			if ($time[1] >= 0 && $time[1] <= 59)
			{
				if ($time[2] >= 0 && $time[2] <= 59)
				{
					return ($time[0] * 60 * 60 + $time[1] * 60 + $time[2]);
				}
			}
		}
	}
	return (-1);
}

if ($argc < 2)
	exit();
$tab = explode(" ", trim($argv[1]));
if (count($tab) != 5)
{
	echo "Wrong Format\n";
	exit();
}
if (ft_day($tab[0]))
{
	if (ft_nday($tab[1]) != 0)
	{
		if (($m = ft_month($tab[2])) != 0)
		{
			if (($y = ft_years($tab[3])) != -1)
				if (($s = ft_time($tab[4])) != -1)
				{
					$tmp = explode(":", $tab[4]);
					echo mktime($tmp[0], $tmp[1], $tmp[2], $m, $tab[1], $y);
					echo "\n";
					exit();
				}
		}
	}
}
echo "Wrong Format\n";
?>
