<?PHP
header("Location: index.html");
if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw']&& $_POST['submit'] && $_POST['submit'] === "OK")
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
				if ($v['passwd'] === hash("whirlpool", $_POST['oldpw']))
				{
					$file[$k]['passwd'] = hash("whirlpool", $_POST['newpw']);
					$error = 1;
				}
				break;
			}
		}
	}
	if ($error === 1)
	{
		file_put_contents("../private/passwd", serialize($file));
	}
	else
		echo "ERROR\n";
}
else
echo "ERROR\n";
?>
