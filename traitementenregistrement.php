<?php
	date_default_timezone_set('EST');
	session_start();
	// S'il y a une erreur, on bloque l'ordre
	$weHaveAnError = false;

	// Vérification du champ vide de l'événement
	if($weHaveAnError === false)
	{
		if(empty($_POST['tournamentname'])) 
		{
			$weHaveAnError = true;
			header('Location:enregistrement.php?erreurEvent1=* Le champ de l\'événement est vide'); 
		}	
	}

	if($weHaveAnError === false)
	{
		// Vérification tournoi en double
		$fichier = "..\\TP2_ProgrammationWeb\\data\\tournois.txt";
		$ressource = fopen($fichier  ,'r');
		$tableauTournoisBase = file($fichier);
		
		// Sorting manual array
		$tableauDesNoms = array(); // Tableau des noms
		for ($i = 0; $i < sizeof($tableauTournoisBase); $i++)
		{
			$tableauTemporaire = explode("|",$tableauTournoisBase[$i]);

				if (strtolower($tableauTemporaire[0]) == strtolower($_POST['tournamentname']))
				{
					$weHaveAnError = true;
					header('Location:enregistrement.php?erreurEvent2=* Le nom de l\'événement est déjà utilisé');
				}
			
		}
		fclose($ressource);
	}
	
	if($weHaveAnError === false)
	{
		// Vérification d'un tournoi dans le passé
		$dateTournoi = mktime( 0, 0, 0, $_POST['month'], $_POST['day'], $_POST['year']);
		if($dateTournoi < time()) 
		{
			$weHaveAnError = true;
			header('Location:enregistrement.php?erreurDate=* L\'événement ne peut pas avoir lieu dans le passé'); 
		}
	}
	
	if($weHaveAnError === false)
	{
		// Vérification du champ vide de la ville
		if(empty($_POST['cityname'])) 
		{
			$weHaveAnError = true;
			header('Location:enregistrement.php?erreurVille=* Le champ du nom de la ville est vide'); 
		}
	}
	
	if($weHaveAnError === false)
	{
		// Vérification du champ vide du pays
		if(empty($_POST['countryname'])) 
		{
			$weHaveAnError = true;
			header('Location:enregistrement.php?erreurPays=* Le champ du nom du pays est vide'); 
		}
	}
	
	if($weHaveAnError === false)
	{
		// Vérification du champ vide du jeu
		if(empty($_POST['gamename'])) 
		{
			$weHaveAnError = true;
			header('Location:enregistrement.php?erreurJeu=* Le champ du nom du jeu est vide'); 
		}
	}
	
	if($weHaveAnError === false)
	{
		// Vérification du champ vide du nombre de joueur max
		if(empty($_POST['maxplayer'])) 
		{
			$weHaveAnError = true;
			header('Location:enregistrement.php?erreurJoueurs=* Le champ du nombre de joueurs est vide'); 
		}
	}
	
	// Si tout est en "ordre"
	if($weHaveAnError === false)
	{
		// Get everything for transfer
		$_SESSION['tournamentname'] = $_POST['tournamentname'];
		$_SESSION['cityname'] = $_POST['cityname'];
		$_SESSION['countryname'] = $_POST['countryname'];
		$_SESSION['gamename'] = $_POST['gamename'];
		$_SESSION['day'] = $_POST['day'];
		$_SESSION['month'] = $_POST['month'];
		$_SESSION['year'] = $_POST['year'];
		$_SESSION['maxplayer'] = $_POST['maxplayer'];
		header('Location:confirmationenregistrement.php'); 
	}
?>