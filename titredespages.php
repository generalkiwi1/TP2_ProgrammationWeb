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
	}
?>