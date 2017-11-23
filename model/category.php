<?php

//Récupération du nombre de comptes par mail
function getActiveCategories() {
	$query = getConnexion()->prepare(" SELECT id, label, url
									   FROM category
									   WHERE statut = 'actif'
	");
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}