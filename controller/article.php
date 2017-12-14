<?php

session_start();

include_once CONNEXION;
// include_once CONNEXION_COOKIE;
include_once MODEL.'category.php';
include_once MODEL.'article_type.php';

$sCategory = explode('/',$_GET['data'])[0];
$sType = explode('/',$_GET['data'])[1];

$aTypeArticle = getTypeArticleByUrl($sType);

$bConnexion = false;
if(isset($_SESSION['connexion'])){
	$bConnexion = true;
}