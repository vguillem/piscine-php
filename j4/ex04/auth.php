<?PHP
function auth($login, $passwd)
{
	if (file_exists('../private'));
	{
		if (file_exists('../private/passwd'));
		{
			$file = unserialize(file_get_contents("../private/passwd"));
			foreach($file as $k => $v)
			{
				if ($v['login'] === $login)
				{
					if ($v['passwd'] === hash("whirlpool", $passwd))
					{
						return (true);
					}
				}
			}
		}
	}

	return (false);
}
?>
