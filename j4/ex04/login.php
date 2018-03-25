<?PHP
include ('auth.php');
session_start();
if ($_POST['login'] && $_POST['passwd'])
{
	if (auth($_POST['login'], $_POST['passwd']) == true)
	{
		$_SESSION['loggued_on_user'] = $_POST['login'];
		echo "<iframe title='chat' src='chat.php' width='100%' height='550'></iframe>";
		echo "<iframe title='speak' src='speak.php' width='100%' height='50'></iframe>";
	}
	else
	{
		$_SESSION['loggued_on_user'] = "";
		echo "ERROR\n";
	}
}
?>
