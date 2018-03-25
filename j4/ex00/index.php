<?PHP
session_start();
if ($_GET['login'] && $_GET['passwd'] && $_GET['submit'] && $_GET['submit'] === "OK")
{
$_SESSION['login'] = $_GET['login'];
$_SESSION['pwd'] = $_GET['passwd'];
}
echo "<html><body>";
echo '<form method="get" action=index.php >';
echo "Identifiant: <input type='text' name='login' value='$_SESSION[login]'/>";
echo "<br />";
echo "Mot de passe: <input type='password' name='passwd' value='$_SESSION[passwd]'/>";
echo "<br />";
echo "<input type='submit' name='submit' value='OK'>";
echo "</form>";
echo "</html></body>";
?>
