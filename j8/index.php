<html>
<head>
<link rel= "stylesheet" href="index.css">
<title>Awesome Battleships Battles</title>
</head>
<body>
<div class="all">
<header>
<h1>Awesome Battleships Battles</h1>
</header>
<div class="middle">
<div class="choice">
<form action="index.php" method="POST">
<?php
if (!$_POST['submit'])
{
?>
<p>Vous n'etes pas d'accord sur la methode a employer pour redresser les bananes ?</p>
<br />
<p>Vous allez pouvoir regler ca sans violence :</p>
	<input type="submit" name="submit" value="Start"></button>
<?PHP
}
else if ($_POST['submit'] === "Start" || $_POST['submit'] === "Next player")
{
?>
<p>Choix du vaisseau :</p>
<SELECT name="vaisseau" size="1">
<OPTION>VAISSEAU_1
</SELECT>
	<input type="submit" name="submit" value="Active starship"></button>
<?PHP
}
else if ($_POST['submit'] === "Active starship")
{
?>
<p>depensez vos PP</p>
<p>PP du vaissseau :</p>
Vitesse : <input style="width:20px;" type="text" name="vitesse"> PP
<br />
Armes : <input style="width:20px;" type="text" name="armes"> PP
<br />
Bouclier : <input style="width:20px;" type="text" name="bouclier"> PP
<br />
Reparation : <input style="width:20px;" type="text" name="reparation"> PP
<br />
	<input type="submit" name="submit" value="Select PP"></button>
<?PHP
}
else if ($_POST['submit'] === "Select PP")
{
?>
	Etat du vaisseau :
<br />
	Caracteristique manoeuvre :
<br />
<SELECT name="virrage" size="1">
<OPTION>aucun
<OPTION>90 droite
<OPTION>90 gauche
</SELECT>
<br />
Deplacer de : <input style="width:20px;" type="text" name="deplacement"> Case.
<input type="submit" name="submit" value="Move"></button>
<?PHP
}
else if ($_POST['submit'] === "Move")
{
?>
nombre de charges :
<br />
	<input type="submit" name="submit" value="Fire"></button>
<?PHP
}
else if ($_POST['submit'] === "Fire")
{
?>
	<input type="submit" name="submit" value="Next player"></button>
<?PHP
}
?>
</form>
</div>
<div class="map">
<iframe title='start' src='map.php' width='800px' height='600px'></iframe>
</div>
</div>
<footer>
<p>&copy vguillem 2018</p>
</footer>
</div>
</body>
</html>
