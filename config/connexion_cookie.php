<?php

// include_once MODELS.'comptes.php';
// include_once MODELS.'mails.php';

// if (isset($_COOKIE['UprigsConnexion']) && (!isset($_SESSION[SESSION]['connexion']) || (isset($_SESSION[SESSION]['connexion']) && ($_SESSION[SESSION]['connexion'] == false)))) {

// 	//On récupère le compte
// 	$aCompteCookie = getComptebyId($_COOKIE['UprigsConnexion']);
// 	//On récupère le type
// 	$iTypeCookie = $aCompteCookie['id_type_compte'];
// 	//On récupère le mail
// 	$aMailCookie = getMailById($aCompteCookie['id_mail']);
// 	$sMailCookie = stripslashes($aMailCookie['mail']);

// 	$_SESSION[SESSION]['connexion'] = true;
// 	$_SESSION[SESSION]['mail'] = $sMailCookie;
// 	$_SESSION[SESSION]['compte'] = $_COOKIE['UprigsConnexion'];
// 	$_SESSION[SESSION]['type'] = $iTypeCookie;
// 	setcookie("UprigsConnexion", $_COOKIE['UprigsConnexion'], time()+60*60*24*30, '/');

// }

?>