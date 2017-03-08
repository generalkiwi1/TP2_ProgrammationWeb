<?php	
	session_start();
	date_default_timezone_set('EST');
	$_SESSION['indexPage']=2;
	include "entete.php";
	
	include "banniere.php";
?>	
	<div id="contenu">
	<?php 
		$fichier = "..\\TP2_ProgrammationWeb\\data\\tournois.txt";
		$ressource = fopen($fichier  ,'r');
		$tableauTournoisBase = file($fichier);
	?>
	<table align="center" border="1" class="tables">
		<h1 align="center">Tournois finis</h1>
			<tr>
				<th>Nom du tournoi</th>
				<th>Date du tournoi</th>
				<th>Ville</th>
				<th>Pays</th>
				<th>Jeu</th>
				<th>Nombre de joueurs maximum</th>
			</tr>
			<?php 
				// Sorting manual array
				$tableauDesDates = array(); // Tableau des dates
				for ($i = 0; $i < sizeof($tableauTournoisBase); $i++)
				{
					$tableauTemporaire = explode("|",$tableauTournoisBase[$i]);
					for ($j = 0; $j < sizeof($tableauTemporaire); $j++)
					{
						if ($tableauTemporaire[$j] > 1000000000)
						{
							$tableauDesDates[$i] = $tableauTemporaire[$j]; // On sort les dates du tableau
						}
					}
				}
				
				$tableauFini = array();
				$tableauAvenir = array();
				
				for ($j = 0; $j < sizeof($tableauTournoisBase); $j++) // Mettre le tableau de base en ordre
				{
					for ($i = 0; $i < sizeof($tableauTournoisBase)-1; $i++)
					{
						if ($tableauDesDates[$i] > $tableauDesDates[$i+1])
						{
							$temporaire1 = $tableauDesDates[$i]; // Échange des valeurs dans le tableau des dates
							$tableauDesDates[$i] = $tableauDesDates[$i+1];
							$tableauDesDates[$i+1] = $temporaire1;
							
							$temporaire2 = $tableauTournoisBase[$i]; // Échange des valeurs dans le tableau de base
							$tableauTournoisBase[$i] = $tableauTournoisBase[$i+1];
							$tableauTournoisBase[$i+1] = $temporaire2;
							
						}
					}
				}
		
				for ($i = 0; $i < sizeof($tableauTournoisBase); $i++) // Séparation des tableaux
				{
					if ($tableauDesDates[$i] < time())
					{
						$tableauFini[$i] = $tableauTournoisBase[$i];
					}
					else 
					{
						$tableauAvenir[$i] = $tableauTournoisBase[$i];
					}
				}
				
				foreach ($tableauFini as $currentLine) // Affichage
				{
					echo '<tr>';
					$splittedLine = explode("|",$currentLine);
					foreach ($splittedLine as $element)
					{
						if ($element > 1000000000)
						{
							echo '<td>'.date('l jS \of F Y h:i:s A',$element).'</td>';
						}
						else
						{
							echo '<td>'.$element.'</td>';
						}
					}
					echo '</tr>';
				}
				echo '</table>'; // Fermeture tableau 1
			?>
			<table align="center" border="1" class="tables">
				<h1 align="center" font="72px">Tournois avenir</h1>
					<tr>
						<th>Nom du tournoi</th>
						<th>Date du tournoi</th>
						<th>Ville</th>
						<th>Pays</th>
						<th>Jeu</th>
						<th>Nombre de joueurs maximum</th>
					</tr>
				<?php 
				foreach ($tableauAvenir as $currentLine) // Affichage
				{
					echo '<tr>';
					$splittedLine = explode("|",$currentLine);
					foreach ($splittedLine as $element)
					{
						if ($element > 1000000000)
						{
							echo '<td>'.date('l jS \of F Y h:i:s A',$element).'</td>';
						}
						else
						{
							echo '<td>'.$element.'</td>';
						}
					}
					echo '</tr>';
				}
				echo '</table>';
			fclose($ressource);
		?>
		
	</div>
	<div class="cleardiv">
		
	</div>
<?php 
	include "piedpage.php";
 ?>