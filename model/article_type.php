<?php

function getTypeArticleByCategoryId($iIdCategory){
	$query = getConnexion()->prepare(" SELECT id, label, url
									   FROM article_type
									   WHERE statut = 'actif'
									   AND category_id = :iIdCategory
	");
	$query->bindParam(':iIdCategory', $iIdCategory, PDO::PARAM_INT);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getTypeArticleByUrl($sType){
	$query = getConnexion()->prepare(" SELECT id, label, category_id
									   FROM article_type
									   WHERE statut = 'actif'
									   AND url = :sType
	");
	$query->bindParam(':sType', $sType, PDO::PARAM_STR);
	$query->execute();
	return $query->fetch(PDO::FETCH_ASSOC);
}