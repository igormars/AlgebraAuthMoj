<?php
/*u mapi config držimo sve konfiguracijske datoteke. Odmah daje neki array. */

return [

	/*
    |--------------------------------------------------------------------------
    | Database Default Driver
    |--------------------------------------------------------------------------
    |
    | Here you can change database driver.
    |
	možemo promjeniti bazu mysql i staviti na neku drugu bazu. 
    */
	'driver' => 'mysql',
	
	/*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    |--------------------------------------------------------------------------
    |
    | By default, database results will be returned as instances of the PHP
    | stdClass object; however, you may desire to retrieve records in an
    | array format for simplicity. Here you can tweak the fetch style.
    |
	
    */
	'fetch' => PDO::FETCH_OBJ
];