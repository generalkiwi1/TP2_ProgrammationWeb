
var tableau = ["img/ville/londre.jpg","img/ville/moscow.jpg","img/ville/paris.jpg","img/ville/tokyo.jpg"];
var compteur = 0;
var timer = setInterval(mytimer, 10000);


function mytimer() {
		if (compteur == 3)
	{
		compteur = -1;
	}
	document.getElementById("carousel").src = tableau[compteur + 1];
	compteur++;
	
}
