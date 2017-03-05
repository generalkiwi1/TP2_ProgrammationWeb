<?php 
	define("USERNAME1", "9vies");
	define("PASSWORD1", "psswrd12");
	define("USERNAME2", "Generalkiwi");
	define("PASSWORD2", "passwrd23");

	if ($_POST['username'] == USERNAME1 && $_POST['password'] == PASSWORD1) 
	{
		$_SESSION['username'] = $_POST['username'];
		header('Location:connexion.php?connection=9vies est connecté');
	}
	else if ($_POST['username'] == USERNAME2 && $_POST['password'] == PASSWORD2) 
	{
		$_SESSION['username'] = $_POST['username'];
		header('Location:connexion.php?connection=Generalkiwi est connecté');
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