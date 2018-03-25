<?PHP
if (file_exists('stoc.csv'));
{
	$result = array();
	$file = file("stoc.csv", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	if ($file)
	{
		foreach($file as $v)
		{
			$t = explode(";", $v);
			$result[$t[0]] = $t[1];
		}
	}
	echo json_encode($file);
}
?>
