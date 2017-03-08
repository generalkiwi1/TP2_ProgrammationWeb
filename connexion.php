<?php 
	$_SESSION['indexPage'] = 5;
	include 'entete.php';
	
	include 'banniere.php';
 ?>
 	<div id="contenu">
 		<h1 class="title">Connexion</h1><br><br><br>
 		<form action="traitementconnexion.php" method="post" class="form">
			Nom d'utilisateur:<input type="text" name="username" maxlength="8" class="formelements">
			<p class="feedback">
				<?php 
					if(isset($_GET['erreur1']) && !empty($_GET['erreur1'])) 
					{
					 	echo $_GET['erreur1'];
					}
					else
					{
					 	echo '<br>';
					} 
				 ?>	
			</p>
			Mot de passe:<input type="password" name="password" maxlength="8" class="formelements">
			<p class="feedback">
				<?php 
					if(isset($_GET['erreur2']) && !empty($_GET['erreur2'])) 
					{
					 	echo $_GET['erreur2'];
					}
					else
					{
					 	echo '<br>';
					}  
			 	?>	
			</p>
			<button type="Submit" value="Submit" class="submitbutton">Connexion</button>
			<p class="feedback">
				<?php 
					if(isset($_GET['connection']) && !empty($_GET['connection'])) 
					{
					 	echo $_GET['connection'];
					} 				
				 ?>	
			</p>
		</form>
 	</div>
 	<div class="cleardiv">
 		
 	</div>
 <?php 
 	include 'piedpage.php';
  ?>