<html>
<head>
<link rel="stylsheet" href="style/css.css" type="text/css">
</head>
<body>
<header>
<?php
session_start();
if (isset($_SESSION['loged']) && $_SESSION['loged'] == true)
{
echo "Mon compte : <a href='modif.php'>" . $_SESSION['firstname'] . "</a>";
?>
<a href="panier.php">  Voir panier</a>
<a href="logout.php">Deconnexion</a>
<?PHP
if (isset($_SESSION['admin']))
echo "<a href='admin.php'>administration</a>";
}
else
{
?>
<a href="create.php">Inscription</a>
<a href="login.php">Connexion</a>
<a href="panier.php">Voir panier</a>
<?PHP
}
?>
</header>
