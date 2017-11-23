

<?php
session_start;

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
if (password_verify($sSaltedPassword, $aUser['user_password'])) {
    $sData['statut'] = true;
} else {
    $sData['statut'] = false;
}

$_SESSION['mail']
$_SESSION['username']
$_SESSION['firstname']
$_SESSION['lastname']
$_SESSION['type_user']


echo $sData;
