<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
</head>
<body>
	<div>
		<form action="traitementconnexion.php" method="post">
			Nom d'utilisateur: <input type="text" name="username" maxlength="8"><br>
			Mot de passe: <input type="password" name="password" maxlength="8"><br>
			<button type="Submit" value="Submit">Connexion</button>
			<p id="erreur"></p>
			<?php 
				if(isset($_POST['erreur']) && !empty($_POST['erreur'])) 
				{
				 	echo $_POST['erreur'];
				} 
			 ?>	
		</form>
	</div>	
</body>
</html>