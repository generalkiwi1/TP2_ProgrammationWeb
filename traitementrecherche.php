<?php 
	
	session_start();

	$filepath = "data/tournois.txt";
	$ressource = fopen($filepath, 'r');

	$tableau = file($filepath);


	$arrayFile = array();
	foreach ($tableau as $line) 
	{
		$array = explode('|', $line);
		
		foreach ($array as $element) 
		{
			if (isset($_POST['tournamentname']) && !empty($_POST['tournamentname'])) 
			{
				if ($element == $_POST['tournamentname']) 
				{
					$arrayFile[] = $line;
					break;
				}
			}
			else if (isset($_POST['cityname']) && !empty($_POST['cityname']))
			{
				if ($element == $_POST['cityname']) 
				{
					$arrayFile[] = $line;
					break;
				}
			}
			else if (isset($_POST['gamename']) && !empty($_POST['gamename']))
			{
				if ($element == $_POST['cityname']) 
				{
					$arrayFile[] = $line;
					break;
				}
			}
			else if (isset($_POST['year']) && !empty($_POST['year']))
			{
				var_dump(time("Y", $element));

				//else if (time("Y", $element) == $_POST['year']) 
				//{
			//		$arrayFile[] = $line;
			//		break;
				//}
			}
		}
	}	
	fclose($ressource);

	$_SESSION['results'] = $arrayFile;
	//var_dump($arrayFile);
	//header('Location:resultatsrecherche.php?erreur=');


 ?>