<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<?php
		include "entete.php";
	
		include "banniere.php";
	
		include "piedpage.php";
	?>	
	<div id="contenu">
		<form action="traitementconnexion.php" method="post">
			Nom d'utilisateur: <input type="text" name="username" maxlength="8"><br>
			Mot de passe: <input type="password" name="password" maxlength="8"><br>
			<button type="Submit" value="Submit">Connexion</button>
			<p id="erreur"></p>
			<?php 
				if(isset($_GET['erreur']) && !empty($_GET['erreur'])) 
				{
				 	echo $_GET['erreur'];
				} 
			 ?>	
		</form>
	</div>	
</body>
</html>