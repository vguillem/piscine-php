<?PHP
	switch($_GET['action'])
	{
		case ('get'):
			echo $_COOKIE[$_GET['name']]."\n";
			break;
		case ('set'):
			setcookie($_GET['name'], $_GET['value']);
			break;
		case ('del'):
			setcookie($_GET['name'], '', 1);
			break;
	}
