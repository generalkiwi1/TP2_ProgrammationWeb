<?php 
	
	session_start();

	$filepath = "data/tournois.txt";
	$ressource = fopen($filepath, 'r');

	$tableau = file($filepath);
	foreach ($tableau as $line) 
	{
		$array = explode('|', $line);
		
		foreach ($array as $element) 
		{
			if ($_POST['tournamentname'] == $element || $_POST['cityname'] == $element || $_POST['gamename'] == $element || time("Y", $_POST['year']) == ) 
			{
				$_SESSION['results'] = $line;
				var_dump($_SESSION['results']);
				break;

			}
		}
	}	
	fclose($ressource);

	//header('Location:resultatsrecherche.php?erreur=');


 ?>