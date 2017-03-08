<?php 
	session_start();
	$_SESSION['indexPage'] = 8;
	include 'entete.php';
	
	include 'banniere.php';
 ?>
 	<div id="contenu">
		<table align="center" border="1" class="tables">
 			<tr>
				<th>Nom du tournoi</th>
				<th>Date du tournoi</th>
				<th>Ville</th>
				<th>Pays</th>
				<th>Jeu</th>
				<th>Nombre de joueurs maximum</th>
			</tr>
			<?php 
				foreach ($_SESSION['results'] as $line) 
				{
					echo '<tr>';
					$splittedLine = explode("|",$line);
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
				echo '</tr>'
			 ?>
		</table>
 	</div>
 	<div class="cleardiv">
 		
 	</div>
 <?php 
 	include 'piedpage.php';
  ?>