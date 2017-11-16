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