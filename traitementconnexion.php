<?php 
	session_start();

	define("USERNAME1", "9vies");
	define("PASSWORD1", "psswrd12");

	if ($_POST['username'] == USERNAME1 && $_POST['password'] == PASSWORD1) 
	{
		$_SESSION['username'] = $_POST['username'];
		header('Location:confirmation.php?connection=Bienvenue '.$_SESSION['username'].', connexion réussie.');
	}
	else if ($_POST['username'] != USERNAME1 && $_POST['username'] != USERNAME2) 
	{
		header('Location:connexion.php?erreur1=Nom d\'utilisateur incorrect');
	}
	else
	{
		header('Location:connexion.php?erreur2=Mot de passe incorrect');
	}
 ?>