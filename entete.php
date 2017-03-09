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
	<body id="imgbg">
		<div id="gabarit"> 

			<div id="logo"><img src="img/Logo/logo.png" alt="logo" /></div>
			<div id="zoneconnexion">
				<?php // Connexion des admins
					if (isset($_SESSION['username']) && !empty($_SESSION['username'])) 
					{
						echo '<a href="traitementdeconnexion.php" id="connectionleft">Deconnexion</a>';
						echo '<a class="connectionright">Bienvenue, '.$_SESSION['username'].' </a>';					
					}
					else
					{
						echo '<a href="connexion.php" class="connectionright">Connexion</a>';
					}
				 ?>
			</div> 
			<div id="titre"> 
				<img src="img/title/tournament.jpg" alt="title image" height="175px" width="824px"/>
			</div> 
			<div class="cleardiv"></div>
			<div id="menu">
				<div class="itembar">
					<a href="index.php" class="menulinks">Accueil</a> 
				</div>
				<div class="itembar">
					<a href="avenir.php" class="menulinks">Avenir</a> 
				</div>
				<div class="itembar">
					<a href="recherche.php" class="menulinks">Recherche</a> 
				</div> 
				<div class="itembar">
					<?php // Enregistrement quand l'admin est présent
						if (isset($_SESSION['username']) && !empty($_SESSION['username'])) 
						{
							echo '<a href="enregistrement.php" class="menulinks">Enregistrement</a>';
						}
					 ?>
				</div>			
			</div>
		<div class="cleardiv"></div> 
