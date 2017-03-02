<?php
	
	echo '<html lang="fr">'; 
	echo '<head>'; 
		echo '<meta charset="UTF-8">'; 
		echo '<title>Recherche</title>'; 
		echo '<link href="css/styles.css" rel="stylesheet" />'; 
		echo '<script src="js/script.js"></script>'; 
	echo '</head>'; 
	echo '<body>'; 
		echo '<div id="gabarit">'; 
		
			// Début Entête visible
			echo '<div id="logo">'.'</div>'; // Lieu logo
			echo '<div id="zoneconnexion">'
					.'<a href="connexion.php">Connexion</a>'
				.'</div>'; // Lieu lien connection
			echo '<div id="titre">'.'</div>'; // Titre (À déterminer)
			echo '<div class="cleardiv">'.'</div>';
			echo '<div id="menu">' // Menu
				.'<div class="itembar">'
					.'<a href="index.php">Acceuil</a>' //lien 1
				.'</div>'
				.'<div class="itembar">'
					.'<a href="avenir.php">Avenir</a>' //lien 2
				.'</div>'
				.'<div class="itembar">'
					.'<a href="enregistrement.php">Enregistrement</a>' //lien 3
				.'</div>'
				.'<div class="itembar">'
					.'<a href="recherche.php">Recherche</a>' //lien 4
				.'</div>'
			.'</div>';
			echo '<div class="cleardiv">'.'</div>'; 
?>