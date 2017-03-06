<?php	
	session_start();
	$_SESSION['indexPage'] = 4; // Session pour les titres
	include "entete.php";
	
	include "banniere.php";
?>	
	<div id="contenu">
		<form action="traitementrecherche.php" method="post">
			Nom d'événement:<input type="text" name="tournamentname" maxlength="30"><br>
			Année:<select name="year">	
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017" selected="selected">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>		
				  </select><br>
			Ville:<input type="text" name="cityname" maxlength="15"><br>
			Jeu:<input type="text" name="gamename" maxlength="30"><br>
			<button type="Submit" value="Submit">Rechercher</button>	
		</form>
	</div>
	<div class="cleardiv">
		
	</div>
<?php 
	include "piedpage.php";
 ?>