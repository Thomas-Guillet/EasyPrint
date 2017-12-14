<?php
include_once '../../../config/constantes.php';
include_once CONNEXION;
include_once MODEL.'user.php';
$sUsername = stripslashes($_POST['sUsername']);
$sFirstname = stripslashes($_POST['sFirstname']);
$sUserLastname = stripslashes($_POST['sLastname']);
$sUserMail = stripslashes($_POST['sUserMail']);

//getUserByEmail
$aUser = getUserByEmail($sUserMail);

$sData = 'error';

if($aUser){
	updateUserNames($sUserMail, $sUsername, $sFirstname, $sUserLastname);
	$sData = 'success';
}


echo $sData;
