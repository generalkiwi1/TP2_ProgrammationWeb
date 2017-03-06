<?php	
	session_start();
	$_SESSION['indexPage'] = 3; // Session pour les titres
	include "entete.php";
	
	include "banniere.php";
?>	

	<div id="contenu">
		<form action="traitementenregistrement.php" method="post">
			Nom d'événement: <input type="text" name="tournamentname" maxlength="30"><br>
			Nom de la ville: <input type="text" name="cityname" maxlength="15"><br>
			Nom du jeu: <input type="text" name="gamename" maxlength="30"><br>
			Date: <input type=""><input type="text"><input type="text">
		</form>
	</div>
	<div class="cleardiv">
		
	</div>
<?php 
	include "piedpage.php";

 ?>