<?php 
	session_start();

	$fichier = "..\\TP2_ProgrammationWeb\\data\\admins.txt";
	$ressource = fopen($fichier  ,'r');
	$tableauAdmin = file($fichier);
	
	// Sorting manual array
	foreach ($tableauAdmin as $ligneCourrante)
	{
		$nomCode = explode("|",$ligneCourrante);
		if ($_POST['username'] == $nomCode[0] && $_POST['password'] == $nomCode[1])
		{
			$_SESSION['username'] = $_POST['username'];
			header('Location:confirmationadmin.php?connection=Bienvenue '.$_SESSION['username'].', connexion réussie.');	
		}
		
		else if (empty($_POST['username']) || $_POST['username'] != $nomCode[0]) 
		{
			header('Location:connexion.php?erreur1=Nom d\'utilisateur incorrect');
		}
		else
		{
			header('Location:connexion.php?erreur2=Mot de passe incorrect');
		}
	}
	
	fclose($ressource);
 ?>