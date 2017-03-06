<?php	
	session_start(); // Session pour les titres
	$_SESSION['indexPage'] = 6;
	
	include "entete.php";
	
	include "banniere.php";
?>	
	<div id="contenu">
		<p>
			<?php 
				if(isset($_GET['connection']) && !empty($_GET['connection'])) 
				{
				 	echo $_GET['connection'];
				}
				header('refresh:3;url=index.php');
			 ?>
		</p>
	</div>
	<div class="cleardiv">
		
	</div>
<?php 
	include "piedpage.php";
 ?>