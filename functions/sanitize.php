<?php

function escape($string)
{
	return htmlentities($string, ENT_QUOTES, 'UTF-8');
	/*spriječiti cross-site scripting, već će od njega napraviti običan html text */
}	