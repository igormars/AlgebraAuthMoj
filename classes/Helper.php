<?php

class Helper
/* */
{
	private function __construct(){}
	private function __clone(){}
	
	/*želimo stvoriti funkcionalnost koja bi povratila header i footer. */
	public function getHeader($title, $header = 'header')
	{
		$path = 'includes/layouts/' . $header . '.php';
		
		/*provjerimo da li ime datoteke postoji*/
		if(file_exists($path)) {	
		
			return require $path;
			/*return "<html>
			<head>
				<title>	{$title}</title>
		
			</head>";*/
			
		}
		return false;
	}
	
	public function getFooter($footer = 'footer')
	{
		$path = 'includes/layouts/' . $footer . '.php';
		
		if(file_exists($path)) {	
		
			return require $path;
		
		}
		return false;
	}
}