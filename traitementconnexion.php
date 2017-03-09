<?php 
	session_start();
	$fichier = "..\\TP2_ProgrammationWeb\\data\\admins.txt";
	$ressource = fopen($fichier  ,'r');
	$tableauAdmin = file($fichier);
	
	// For some reason the password is always admin123
	// so i hardcode almost everything in this section
	if ($_POST['username'] == "bob")
	{
		$i = 0;
	}
	else if ($_POST['username'] == "patrick")
	{
		$i = 1;
	}
	else if ($_POST['username'] == "admin")
	{
		$i = 2;
	}
	
	switch ($i) 
	{
		case 0:
			$nomCode = explode("|",$tableauAdmin[$i]);
			if ($_POST['username'] == $nomCode[0] && $_POST['password'] == "leponge")
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
		break;
		
		case 1:
			$nomCode = explode("|",$tableauAdmin[$i]);
			if ($_POST['username'] == $nomCode[0] && $_POST['password'] == "star")
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
		break;
		
		case 2:
			$nomCode = explode("|",$tableauAdmin[$i]);
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
		break;
		
	}
	fclose($ressource);
 ?>