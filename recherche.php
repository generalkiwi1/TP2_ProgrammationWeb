<?php	
	session_start();
	$_SESSION['indexPage'] = 4; // Session pour les titres
	include "entete.php";
	
	include "banniere.php";
?>	
	<div id="contenu">
		<h1 class="title">Rechercher un tournoi</h1><br><br><br>
		<form action="traitementrecherche.php" method="post" id="form">
			Nom d'événement:<input type="text" name="tournamentname" maxlength="30" class="formelements"><br><br>
			Année:<select name="year" class="formelements">	
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017" selected="selected">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>		
				  </select><br><br>
			Ville:<input type="text" name="cityname" maxlength="15" class="formelements"><br><br>
			Jeu:<input type="text" name="gamename" maxlength="30" class="formelements"><br><br>
			<button type="Submit" value="Submit" class="submitbutton">Rechercher</button>	
		</form>
	</div>
	<div class="cleardiv">
		
	</div>
<?php 
	include "piedpage.php";
 ?>