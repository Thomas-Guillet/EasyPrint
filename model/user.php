<?php

//Récupération du nombre de comptes par mail
function getNbComptesByMail($sMail) {
	$query = getConnexion()->prepare(" SELECT count(id_user) AS nb_user
									   FROM user
									   WHERE mail_user = :sMail
	");
	$query->bindParam(':sMail', $sMail, PDO::PARAM_STR);
	$query->execute();
	return $query->fetch(PDO::FETCH_ASSOC);
}

//Récupérer un utilisateur par mai
function getUserByEmail($sMail){
	$query = getConnexion()->prepare(" SELECT *
									   FROM user
									   WHERE mail_user = :sMail
	");
	$query->bindParam(':sMail', $sMail, PDO::PARAM_STR);
	$query->execute();
	return $query->fetch(PDO::FETCH_ASSOC);
}

//Modification des nom de l'utilisateur
function updateUserNames($sUsermail, $sUsername, $sFirstname, $sLastName) {
	$query = getConnexion()->prepare(" UPDATE user
									   SET username_user = :sUsername, firstname_user = :sFirstname, lastname_user = :sLastname
									   WHERE mail_user = :sUsermail
	");
	$query->bindParam(':sUsername', $sUsername, PDO::PARAM_STR);
	$query->bindParam(':sFirstname', $sFirstname, PDO::PARAM_STR);
	$query->bindParam(':sLastname', $sLastName, PDO::PARAM_STR);
	$query->bindParam(':sUsermail', $sUsermail, PDO::PARAM_STR);
	$query->execute();
}

//Ajout d'un utilisateur
function addUser($sUserMail, $sSecurePassword){
	$query = getConnexion()->prepare(" INSERT INTO user (mail_user, password_user)
									   VALUES (:sMail, :sPassword)
	");
	$query->bindParam(':sMail', $sUserMail, PDO::PARAM_STR);
	$query->bindParam(':sPassword', $sSecurePassword, PDO::PARAM_STR);
	$query->execute();
}

?>