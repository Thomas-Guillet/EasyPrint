<?php

include_once '../../../config/constantes.php';
include_once CONNEXION;
include_once MODEL.'user.php';

$sUserMail = stripslashes($_POST['mail']);
$sUserPassword = $_POST['password'];

//Secure password
$sSaltedPassword = substr($sUserPassword, 0, SALT_POSITION) . SALT . substr($sUserPassword, SALT_POSITION);
$sSecurePassword = password_hash($sSaltedPassword, PASSWORD_DEFAULT);

//Check Email
$iNbCompte = getNbComptesByMail($sUserMail)['nb_user'];

$aData = array();
if($iNbCompte == 0){
	addUser($sUserMail, $sSecurePassword);
	$aData['state'] = true;
	$aData['session'] = 'new';
}else{
	$aData['state'] = true;
	$aData['session'] = $sUserMail;
}
$aData['mail'] = $sUserMail;
$sData = json_encode($aData);

echo $sData;
