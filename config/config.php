<?php 

//CONFIG DES CONSTANTES

if ($_SERVER['SERVER_NAME'] == 'localhost') {

	$sRoot = 'C:/wamp64/www/EasyPrint/';
	$sUrl = 'http://localhost/';
	$sDossierLocal = 'EasyPrint/';

//TODO : configurer avant mise en production
} else {

}

define ('ROOT', $sRoot);
define ('URL', $sUrl);
define ('DOSSIER_LOCAL', $sDossierLocal);

?>