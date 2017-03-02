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
		header('Location:connexion.php?erreur=9vies est connecté');
	}
	else if ($_SESSION['username'] == USERNAME2 && $_SESSION['password'] == PASSWORD2) 
	{
		header('Location:connexion.php?erreur=Generalkiwi est connecté');
	}

	function ValiderUtilisateur()
	{
		if ($_SESSION['username'] == USERNAME1 && $_SESSION['password'] == PASSWORD1) 
		{
			header('Location:connexion.php?erreur=9vies est connecté');
		}
		else if ($_SESSION['username'] == USERNAME2 && $_SESSION['password'] == PASSWORD2) 
		{
			header('Location:connexion.php?erreur=Generalkiwi est connecté');
		}
	}

 ?>