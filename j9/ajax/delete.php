
<?PHP
if (file_exists('stoc.csv'));
{
	$file = file("stoc.csv");
	if ($_GET['id'])
	{
		foreach($file as $k => $v)
		{
			$tm = explode(';', $v);
			if (intval($tm[0]) == intval($_GET['id']))
			{
				unset($file[$k]);
			}
		}
		file_put_contents("stoc.csv", $file);
	}
}
?>
