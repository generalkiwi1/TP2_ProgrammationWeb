<!doctype html>

<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>
		<?php 
			include 'titredespages.php'; // Session pour les titres
			afficherTitre($_SESSION['indexPage']); 
		?>
	</title>
	<link href="css/styles.css" rel="stylesheet" />
	<script src="js/script.js"></script>
</head>
	<body>
		<div id="gabarit"> 

			<div id="logo"><img src="img/Logo/logo.png" alt="logo" /></div>
			<div id="zoneconnexion">
				<?php 
					if (isset($_SESSION['username']) && !empty($_SESSION['username'])) 
					{
						echo '<a>Bienvenue, '.$_SESSION['username'].' </a>';
						echo '<a href="deconnexion.php">Deconnexion</a>';
					}
					else
					{
						echo '<a href="connexion.php">Connexion</a>';
					}
				 ?>
			</div> 
			<div id="titre"> 
				<img src="img/title/tournament.jpg" alt="title image" height="175px" width="824px"/>
			</div> 
			<div class="cleardiv"></div>
			<div id="menu">
				<div class="itembar">
					<a href="index.php">Accueil</a> 
				</div>
				<div class="itembar">
					<a href="avenir.php">Avenir</a> 
				</div> 
				<div class="itembar">
					<a href="enregistrement.php">Enregistrement</a>
				</div>
				<div class="itembar">
					<a href="recherche.php">Recherche</a> 
				</div>
			</div>
		<div class="cleardiv"></div> 
