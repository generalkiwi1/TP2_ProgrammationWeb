<?php	
	session_start(); // Session pour les titres
	$_SESSION['indexPage'] = 1;
	
	include "entete.php";
	
	include "banniere.php";
?>	
	<div id="contenu">
		<h1 align="center">
			Bienvenue sur le site de Global Gaming Community !
		</h1>
		<h2 align="center">
			Sur ce site, vous pouvez soit enregistrer de nouveaux tournois si vous êtes l'un des admins, 
			soit regarder ou rechercher l'un des tournois dont nous sommes les sponsors.
			J'espère que vous trouverez un tournoi qui pourra satisfaire votre désir de compétition et 
			dont vous aurez un réel plaisir à y prendre part. <br>
			L'équipe de GG Community vous souhaite une bonne journée.	
		</h2>
		<div align="center">
			<img src="img/index.jpg" alt="image index"/>
		</div>
	</div>
	<div class="cleardiv">
		
	</div>
<?php 
	include "piedpage.php";
 ?>
