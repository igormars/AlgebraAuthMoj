<?php

session_start();
/*kada korisnik preko URL-a napravi zahtjev, server čita da mora pokrenuti sesiju. 
Sesiju gasimo kada ugasimo cijeli preglednik a ne samo tab*/

spl_autoload_register(function ($class) {
		require_once 'classes/' . $class . '.php';
	});
/*spl_autoload_register će tražiti sve klase, uzeti ime i staviti u parametar. Radi samo sa klasama a ne sa funkcijama. 
Naziv klase mora biti isti kao naziv foldera gdje se nalaze klase.*/
/*callback funkcija function($class), nije potrebno dati ime, ona se automatski pokreće.*/
/*require_once 'classes/' . $class . '.php'; - zamjenjuje sve klase iz datoteke classes*/


require_once 'functions/sanitize.php';

/*funkcije moramo ručno uključiti*/