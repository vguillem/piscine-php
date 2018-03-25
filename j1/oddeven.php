#!/usr/bin/php
<?php
$i = 0;
while ($i++ < 5)
{
	echo "Entrez un nombre:";
	$nb=fgets(STDIN);
	if(feof(STDIN) == TRUE)
		exit();
	//$nb = str_replace("\n", "", "$nb");
	$nb = trim($nb);
	if (!is_numeric($nb))
	{
		echo $nb. ' n\'est pas un chiffre';
		echo "\n";
	}
	else if ($nb % 2 == 0)
		echo "Le chiffre $nb est Pair\n";
	else if ($nb % 2 != 0)
		echo "Le chiffre $nb est Impair\n";
}
?>
