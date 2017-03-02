<?php 
	session_start();

	define("USERNAME1", "9vies");
	define("PASSWORD1", "psswrd12");
	define("USERNAME2", "Generalkiwi");
	define("PASSWORD2", "passwrd23");

	$_SESSION['username'] = $_POST['username']; 

	function ValiderUtilisateur()
	{
		if ($_POST['username'] == USERNAME1 && $_POST['password'] == PASSWORD1) 
		{
			header('Location:connexion.php?erreur=9vies est connecté');
		}
		else if ($_POST['username'] == USERNAME2 && $_POST['password'] == PASSWORD2) 
		{
			header('Location:connexion.php?erreur=Generalkiwi est connecté');
		}
	}

	

 ?>