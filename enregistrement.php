<?php	
	session_start();
	$_SESSION['indexPage'] = 3; // Session pour les titres
	include "entete.php";
	
	include "banniere.php";
?>	

	<div id="contenu">
		<form align="center" action="traitementenregistrement.php" method="post">
			Nom d'événement: <input type="text" name="tournamentname" maxlength="30"><br>
			Nom de la ville: <input type="text" name="cityname" maxlength="15"><br>	
			Nom du jeu: <input type="text" name="gamename" maxlength="30"><br>
			Date: 
				<select>
					<option name="day1" value="day" selected>01</option>
					<option name="day2" value="day">02</option>
					<option name="day3" value="day">03</option>
					<option name="day4" value="day">04</option>
					<option name="day5" value="day">05</option>
					<option name="day6" value="day">06</option>
					<option name="day7" value="day">07</option>
					<option name="day8" value="day">08</option>
					<option name="day9" value="day">09</option>
					<option name="day10" value="day">10</option>
					<option name="day11" value="day">11</option>
					<option name="day12" value="day">12</option>
					<option name="day13" value="day">13</option>
					<option name="day14" value="day">14</option>
					<option name="day15" value="day">15</option>
					<option name="day16" value="day">16</option>
					<option name="day17" value="day">17</option>
					<option name="day18" value="day">18</option>
					<option name="day19" value="day">19</option>
					<option name="day20" value="day">20</option>
					<option name="day21" value="day">21</option>
					<option name="day22" value="day">22</option>
					<option name="day23" value="day">23</option>
					<option name="day24" value="day">24</option>
					<option name="day25" value="day">25</option>
					<option name="day26" value="day">26</option>
					<option name="day27" value="day">27</option>
					<option name="day28" value="day">28</option>
					<option name="day29" value="day">29</option>
					<option name="day30" value="day">30</option>
					<option name="day31" value="day">31</option>
				</select>
				<select>
					<option name="month1" value="month" selected>01</option>
					<option name="month2" value="month">02</option>
					<option name="month3" value="month">03</option>
					<option name="month4" value="month">04</option>
					<option name="month6" value="month">05</option>
					<option name="month7" value="month">06</option>
					<option name="month8" value="month">07</option>
					<option name="month9" value="month">09</option>
					<option name="month10" value="month">10</option>
					<option name="month11" value="month">11</option>
					<option name="month12" value="month">12</option>
				</select>
				<select>
					<option name="year2017" value="year" selected>2017</option>
					<option name="year2018" value="year">2018</option>
					<option name="year2019" value="year">2019</option>
				</select><br>
			<button type="submit" value="submit">Submit</button>
				
		</form>
	</div>
	<div class="cleardiv">
		
	</div>
<?php 
	include "piedpage.php";

 ?>