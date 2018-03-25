<?php
$map = array();
$i = 0;
while ($i++ < 100)
{
	$map[$i] = array();
	$j = 0;
	while ($j++ < 150)
		$map[$i][$j] = 1;
}
$map[1][3] = 2;
$map[1][1] = 2;
$map[1][2] = 2;
$map[5][40] = 3;
$map[5][41] = 3;
$map[5][42] = 3;
$map[100][150] = 4;
$map[100][149] = 4;
$map[100][148] = 4;

?>
<html><head>
<title>Awesome Battleships Battles</title>
<link rel= "stylesheet" href="map.css">
</head><body>
<table>
<?PHP
$pr = 1;
foreach ($map as $v)
{
	echo "<tr>";
	foreach ($v as $m)
	{
		if ($m == 1)
			echo "<td class='un'></td>";
		if ($m == 2)
			echo "<td class='deux'></td>";
		if ($m == 3)
			echo "<td class='trois'></td>";
		if ($m == 4)
			echo "<td class='quatre'></td>";
	}
	echo "</tr>";
}
?>
</table>
</body></html>
