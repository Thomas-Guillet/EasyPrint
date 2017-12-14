

<?php
include_once '../../../config/constantes.php';
include_once CONNEXION;
include_once MODEL.'user.php';

$sUserMail = stripslashes($_POST['mail']);
$sUserPassword = $_POST['password'];

//getUserByEmail
$aUser = getUserByEmail($sUserMail);

//Secure password
$aData = array();
$sSaltedPassword = substr($sUserPassword, 0, SALT_POSITION) . SALT . substr($sUserPassword, SALT_POSITION);
if (password_verify($sSaltedPassword, $aUser['password_user'])) {
    $sData = true;
} else {
    $sData = false;
}

if($sData){
	session_start();
	$_SESSION['connexion'] = true;
	$_SESSION['mail'] = $sUserMail;
	$_SESSION['username'] = $aUser['username_user'];
	$_SESSION['firstname'] = $aUser['firstname_user'];
	$_SESSION['lastname'] = $aUser['lastname_user'];
	$_SESSION['type_user'] = $aUser['id_user_type'];
}

print_r($sData);
