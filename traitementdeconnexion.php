<?php
	session_start();
	$_SESSION['indexPage'] = 8;
	include 'entete.php';
	
	include 'banniere.php';
	
	session_unset('username');
 ?>
 	<div id="contenu">
 		<h1 class="title">Vous vous êtes déconnecté</h1><br><br><br>
		<?php 
			header('refresh:3;url=index.php');
		 ?>
 		
 	</div>
 	<div class="cleardiv">
 		
 	</div>
 <?php 
 	include 'piedpage.php';
  ?>