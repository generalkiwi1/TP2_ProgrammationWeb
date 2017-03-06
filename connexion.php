<?php 
	$_SESSION['indexPage'] = 5;
	include 'entete.php';
	
	include 'banniere.php';
 ?>
 	<div id="contenu">
 		<form action="traitementconnexion.php" method="post">
			Nom d'utilisateur: <input type="text" name="username" maxlength="8">
			<?php 
				if(isset($_GET['erreur1']) && !empty($_GET['erreur1'])) 
				{
				 	echo $_GET['erreur1'];
				} 
			 ?>	
			<br>
			Mot de passe: <input type="password" name="password" maxlength="8">
			<?php 
				if(isset($_GET['erreur2']) && !empty($_GET['erreur2'])) 
				{
				 	echo $_GET['erreur2'];
				} 
			 ?>	
			<br>
			<button type="Submit" value="Submit">Connexion</button>
			<p id="erreur"></p>
			<?php 
				if(isset($_GET['connection']) && !empty($_GET['connection'])) 
				{
				 	echo $_GET['connection'];
				} 
				
			 ?>	
		</form>
 	</div>
 	<div class="cleardiv">
 		
 	</div>
 <?php 
 	include 'piedpage.php';
  ?>