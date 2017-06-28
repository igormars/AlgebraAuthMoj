<!--form method="post">
	<input type="text" name="ime">
	<input type="submit" name="send" value="Pošalji">
</form-->


<?php


/*cross-site scripting - ukoliko u polje forme upišemo <script>alert</script> onesposobimo cijelu bazu za korisnike. Google Chrome ima ugrađeno u aplikaciju*/
/*
function escape($string)
{
	return htmlentities($string, ENT_QUOTES, 'utf-8');
}
/*sprečavamo korisnika da upiše nešto drugo u polje osim imena. Sve posebne znakove pretvara u html slova, sprečavamo cross-site scripting*/
/*
if(isset($_POST['send'])){
	echo escape($_POST['ime']);
}
*/


require_once 'core/init.php';

/*$db = include 'config/database.php';
print_r($db);
funkcijom include dobijemo konfiguracijski array*/

#$db = Config::get('database');
/*da ne dozvolim stvaranje objekta iz klase, kreirati metodu sa geterom koja će obuhvaćati vrijednosti datoteke. 
Klasa Config koja ima statičku metodu get koja prima parametar databes. Ne želimo izradu objekta iz klase.*/

/*if (!$db){
	echo 'Ne mogu dohvatiti konfiguracijsku datoteku';
} else {
var_dump($db);
}*/

Helper::getHeader('Algebra Auth')
/*pozivamo title */

#Helper::getHeader('Algebra Auth','header-reg')
/*pozivamo title a možemo staviti i kao drugi parametar*/

#require_once 'includes/layouts/header.php';

#Helper::getFooter('')
#require_once 'includes/layouts/footer.php';

?>