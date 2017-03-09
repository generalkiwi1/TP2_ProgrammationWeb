<?php
	function afficherTitre($page) // affichage des titre selon la page
	{
		if($page == 1)
		{
			echo 'Accueil';
		}
		
		else if($page == 2)
		{
			echo 'Avenir';
		}
		
		else if($page == 3)
		{
			echo 'Enregistrement';
		}
		else if($page == 4)
		{
			echo 'Recherche';
		}
		else if($page == 5)
		{
			echo 'Connexion';
		}
		else if($page == 6)
		{
			echo 'Confirmation';
		}
		else if($page == 7)
		{
			echo 'Confirmation Enregistrement';
		}
		else if($page == 8)
		{
			echo 'Déconnection';
		}
		else if ($page == 9)
	    {
			echo 'Résultats';
		}
	}
?>