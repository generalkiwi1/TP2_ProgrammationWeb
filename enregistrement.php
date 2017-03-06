<?php	
	session_start();
	$_SESSION['indexPage'] = 3; // Session pour les titres
	include "entete.php";
	
	include "banniere.php";
?>	


<div id="contenu">
	<form action="traitementenregistrement.php" method="post">
		<table align="center">
			<tr>
				<td>Nom d'événement </td>
				<td><input type="text" name="tournamentname" maxlength="30"></td>
			</tr>
			<tr>
				<td>Nombre de joueurs max</td>
				<td><input type="text" name="maxplayer" maxlength="3"></td>
			</tr>
			<tr>
				<td>Nom de la ville </td>
				<td><input type="text" name="cityname" maxlength="15"></td>
			</tr>
			<tr>
				<td>Nom du pays </td>
				<td><input type="text" name="countryname" maxlength="15"></td>
			</tr>
			<tr>
				<td>Nom du jeu </td>
				<td><input type="text" name="gamename" maxlength="30"></td>
			</tr>
			<tr>
				<td>Date </td>
				<td>
					<select name="day">
						<option value="1" selected>01</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
						<option value="5">05</option>
						<option value="6">06</option>
						<option value="7">07</option>
						<option value="8">08</option>
						<option value="9">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
					<select name="month">
						<option value="1" selected>01</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
						<option value="5">05</option>
						<option value="6">06</option>
						<option value="7">07</option>
						<option value="8">08</option>
						<option value="9">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
					<select name="year">
						<option value="2017" selected>2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
					</select>
				</td>
			</tr>
		</table>
		<p align="center">
			<button type="submit" value="submit">Submit</button>
		</p>
			
	</form>
</div>
<div class="cleardiv">
	
</div>
<?php 
	include "piedpage.php";

 ?>