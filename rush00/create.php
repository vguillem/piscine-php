<?PHP
include 'bdd.php';
if (isset($_POST['firstname']) && isset($_POST['passwd']) && isset($_POST['lastname']) && isset($_POST['mail']) && isset($_POST['submit']) && $_POST['submit'] === "OK")
{
	header("Location: index.php");
	$firstname = mysqli_real_escape_string($bdd, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($bdd, $_POST['lastname']);
	$mail = mysqli_real_escape_string($bdd, $_POST['mail']);
	$passwd = hash('whirlpool', $_POST['passwd']);
	$req = "INSERT INTO Users (firstname, lastname, email, passwd) VALUES('" . $firstname . "', '" . $lastname . "', '" . $mail . "', '" .$passwd . "')";
	$result = mysqli_query($bdd, $req);
	mysqli_free_result($result);
}
else
{
	if (isset($_POST['submit']) && $_POST['submit'] === "OK")
	{
		if (!$_POST['firstname'])
			echo "Champ Prenom manquand. <br />";
		if (!$_POST['lastname'])
			echo "Champ Nom manquand. <br />";
		if (!$_POST['mail'])
			echo "Champ Mail manquand. <br />";
		if (!$_POST['passwd'])
			echo "Champ Password manquand. <br />";
	}
?>
<html><body>
<form method="POST" action=create.php >
Prenom: <input type='text' name='firstname' value=''/>
<br />
Nom: <input type='text' name='lastname' value=''/>
<br />
Adresse mail: <input type='text' name='mail' value=''/>
<br />
Mot de passe: <input type='password' name='passwd' value=''/>
<br />
<input type='submit' name='submit' value='OK'>
</form>
</body>
</html>
<?php
}
?>
