<form method="post">
	<input type="text" name="ime">
	<input type="submit" name="send" value="Pošalji">
</form>


<?php


/*cross-site scripting - ukoliko u polje forme upišemo <script>alert</script> onesposobimo cijelu bazu za korisnike. Google Chrome ima ugrađeno u aplikaciju*/
function escape($string)
{
	return htmlentities($string, ENT_QUOTES, 'UTF-8');
}
/*sprečavamo korisnika da upiše nešto drugo u polje osim imena. Sve posebne znakove pretvara u html slova, sprečavamo cross-site scripting*/

if(isset($_POST['send'])){
	echo escape($_POST['ime']);
}

/*Autorizacija je sustav je kada se jednom logirali, nudi vam se mogućnost da aplikacija zapamti user i password. Osalnja se na 
sesije i kolačiće (tj. cookies). Prilikom odjave brišu se sesije i kukiji.
Autentifikacija su sustavi koji provjeravaju vaš user name i password. */