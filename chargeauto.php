<?php

// On enregistre notre autoload.
function chargerClasse($classname)
{
	$dirs = array(
		'../office/',
		'../Login/',
		'../Login/repository/',
		'../Login/class/',
		'../Login/crud/',
		'../repository/',
		'../class/',
		'../crud/',
		'office/',
		'class/',
		'crud/',
		'Login/',
		'repository/',
		'../',
		'./',
    );

	foreach( $dirs as $dir ) {
		if (file_exists($dir.''.$classname.'.php')) {
			require_once($dir.''.$classname.'.php');
			return;
		}
	}
}

spl_autoload_register('chargerClasse');

?>
