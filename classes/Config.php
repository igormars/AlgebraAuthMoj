<?php

class Config
/*klasa se mora zvati kao datoteka, tj. Config klasa kao config.php file*/
{
	/*želimo zabraniti instanciranje te stavimo da je private*/
	private function __construct(){}
	/*želimo zabraniti kloniranje, ako stavimo magičnu metodu CLONE kao private te na taj način zabranimo kloniranje*/
	private function __clone(){}
	
	
	/*želimo da nam vrati database datoteku*/
	/*postavimo da je vrijednost $file null*/
	public static function get($file = null)
	{
		if($file) {
			$path = 'config/' . $file . '.php';
			
			if(file_exists($path)) {
				/*if(file_exists($path)) -  da li file postoji*/
				$items = require 'config/' . $file . '.php';
				return $items;
			}
		}
		return false;
	}
}