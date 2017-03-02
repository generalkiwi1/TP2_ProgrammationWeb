<?php 
	include 'entete.php';

	include 'banniere.php';
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
 	<div id="cleardiv">
 		
 	</div>
 <?php 
 	include 'piedpage.php';
  ?>