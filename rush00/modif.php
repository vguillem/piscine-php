<?PHP
include('bdd.php');
session_start();
if ($_SESSION['loged'])
{
if (isset($_POST['oldpw']) && isset($_POST['newpw']) && isset($_POST['submit']) && $_POST['submit'] === "OK")
{
	$passwd = hash('whirlpool', $_POST['newpw']);
	$oldpasswd = hash('whirlpool', $_POST['oldpw']);
	$req = "SELECT passwd FROM Users WHERE id='" . $_SESSION['userid'] . "'";
	$result = mysqli_query($bdd, $req);
	while ($tmp = mysqli_fetch_assoc($result)) {
		if ($tmp['passwd'] === $oldpasswd)
		{
			$sql = "UPDATE Users SET passwd='" . $passwd . "' WHERE id='" . $_SESSION['userid'] . "'";
			$result2 = mysqli_query($bdd, $sql);
			mysqli_free_result($result2);
		}
	}
	mysqli_free_result($result);
	header("Location: index.php");
}
else
{
?>
<html><body>
<form method="POST" action="modif.php" >
Ancien mot de passe: <input type='password' name='oldpw' value=''/>
<br />
Nouveau mot de passe: <input type='password' name='newpw' value=''/>
<br />
<input type='submit' name='submit' value='OK'>
</form>
</html></body>
<?PHP
}
}
else
	header("Location: index.php");
?>
