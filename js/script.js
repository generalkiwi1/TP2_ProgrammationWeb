var tableau = ["img/tokyo.jpg","img/londre.jpg","img/paris.jpg","img/moscow.jpg"]; //Banque d'image
var compteur = 0;

var timer = setInterval(mycode, 10000); // Timer
function MyTimer() {
		if (compteur == 3)
	{
		compteur = -1;
	}
	document.getElementById("carousel").src = tableau[compteur + 1];
	compteur++;
	
}
