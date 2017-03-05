<?php 
	session_start();

	define("USERNAME1", "9vies");
	define("PASSWORD1", "psswrd12");
	define("USERNAME2", "Generalkiwi");
	define("PASSWORD2", "passwrd23");

	$_SESSION['username'] = $_POST['username']; 
	$_SESSION['password'] = $_POST['password'];

	if ($_SESSION['username'] == USERNAME1 && $_SESSION['password'] == PASSWORD1) 
	{
		header('Location:connexion.php?connection=9vies est connecté');
	}
	else if ($_SESSION['username'] == USERNAME2 && $_SESSION['password'] == PASSWORD2) 
	{
		header('Location:connexion.php?connection=Generalkiwi est connecté');
	}
	else if ($_SESSION['username'] != USERNAME1 && $_SESSION['username'] != USERNAME2) 
	{
		header('Location:connexion.php?erreur1=Nom d\'utilisateur incorrect');
	}
	else
	{
		header('Location:connexion.php?erreur2=Mot de passe incorrect');
	}
 ?>