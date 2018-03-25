<?PHP
header("Location: index.html");
if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK")
{
	if (!file_exists('../private'));
		mkdir("../private");
	$error = -1;
	if (file_exists('../private/passwd'));
	{
		$file = unserialize(file_get_contents("../private/passwd"));
		foreach($file as $k => $v)
		{
			if ($v['login'] === $_POST['login'])
			{
				echo "ERROR\n";
				$error = 1;
				break;
			}
		}
	}
	if ($error === -1)
	{
		$t['login'] = $_POST['login'];
		$t['passwd'] = hash("whirlpool", $_POST['passwd']);
		echo $t['passwd'];
		$file[] = $t;
		file_put_contents("../private/passwd", serialize($file));
	}
}
else
echo "ERROR\n";
?>
