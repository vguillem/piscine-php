<?php
include('bdd.php');
if($_POST['submit'])
{
	$req = mysqli_query($bdd, 'CREATE TABLE Users (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, LASTNAME VARCHAR(30) NOT NULL, email VARCHAR(50), passwd VARCHAR(128))');
	mysqli_free_result($req);

	$req = mysqli_query($bdd, 'CREATE TABLE Item (id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nom VARCHAR(30) NOT NULL, prix float NOT NULL, description VARCHAR(255), image varchar(255) DEFAULT NULL)');
	mysqli_free_result($req);

	$req = mysqli_query($bdd, 'CREATE TABLE Admin (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Users_id INT(6) NOT NULL)');
	mysqli_free_result($req);

	$req = mysqli_query($bdd, 'CREATE TABLE Categories (id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, item_id INT(10) NOT NULL, nom_categories VARCHAR(30))');
	mysqli_free_result($req);

	$req = mysqli_query($bdd, 'CREATE TABLE Commande (id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, user_id INT(10) NOT NULL)');
	mysqli_free_result($req);

	$req = mysqli_query($bdd, 'CREATE TABLE Panier (id INT(10) UNSIGNED, item_id INT(10) NOT NULL, qte INT(10))');
	mysqli_free_result($req);
}
else
{
?>
<form action="install.php" method="post">
<input style="height:100px;width:200px;margin-top:20%;margin-left:45%;" type="submit" name="submit" value="Installation" />
</form>
<?php
}
?>
