<?php

session_start();

include_once CONNEXION;
// include_once CONNEXION_COOKIE;
include_once MODEL.'category.php';
include_once MODEL.'article_type.php';

$iIdBackground = rand(1, 5);
$sUrlBackground = IMG.'/home/'.$iIdBackground.'.jpg';


//Items
$aTypeArticles = array();
//On récupère toutes les catégories actives
$aListCategories = getActiveCategories();
foreach ($aListCategories as $aCategory) {
	$iIdCategory = $aCategory['id'];
	//On récupère et stocke toutes les sous-catégories de la catégorie
	$aTypeArticles[$iIdCategory]['label'] = $aCategory['label'];
	$aTypeArticles[$iIdCategory]['url'] = $aCategory['url'];
	$aTypeArticles[$iIdCategory]['content'] = getTypeArticleByCategoryId($iIdCategory);
	$aTypeArticles[$iIdCategory]['nb_items'] = count($aTypeArticles[$iIdCategory]['content']);
}

$bConnexion = false;
if($_SESSION['connexion']){
	$bConnexion = true;
}
?>