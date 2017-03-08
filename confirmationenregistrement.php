<?php	
	session_start();
	$_SESSION['indexPage'] = 7; // Session pour les titres
	include "entete.php";
	
	include "banniere.php";
?>
<div id="contenu">
	<h1 align="center"> Félicitation !!! Votre tournoi a été enregisté avec succès !!! </h1>
	<h1 align="center"> Vos Données : </h1>
	<?php
		// Affichage de confirmation
		echo '<h1 align="center">'.'Nom de l\'événement : '.$_SESSION['tournamentname'].'</h1>';
		echo '<h1 align="center">'.'Nom de la ville: '.$_SESSION['cityname'].'</h1>';
		echo '<h1 align="center">'.'Nom du pays : '.$_SESSION['countryname'].'</h1>';
		echo '<h1 align="center">'.'Nom du jeu : '.$_SESSION['gamename'].'</h1>';
		echo '<h1 align="center">'.'Jour : '.$_SESSION['day'].'</h1>';
		echo '<h1 align="center">'.'Mois : '.$_SESSION['month'].'</h1>';
		echo '<h1 align="center">'.'L\'année : '.$_SESSION['year'].'</h1>';
		echo '<h1 align="center">'.'Nombre de joueurs max : '.$_SESSION['maxplayer'].'</h1>';
		echo '<h1 align="center">'.'Merci et bonne journée !!!'.'</h1>';
		
		// Enrgesistrment en arrière plan
		$dateTournoi = mktime( 0, 0, 0, $_SESSION['month'], $_SESSION['day'], $_SESSION['year']);
		
		$fichier = "..\\TP2_ProgrammationWeb\\data\\tournois.txt";
		$ressource = fopen($fichier  ,'a');
		$donnéesEnString = "\r\n".$_SESSION['tournamentname']."|".$dateTournoi."|".$_SESSION['cityname']."|".$_SESSION['countryname']."|".$_SESSION['gamename']."|".$_SESSION['maxplayer'];
		
		fwrite($ressource, $donnéesEnString);
		
		fclose($ressource);
	?>
</div>	
<div class="cleardiv">

</div>
<?php 
	include "piedpage.php";
 ?>
