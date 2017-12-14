<?php

include_once 'config.php';

//CONSTANTES

define ('SESSION', 'print');
define ('CONNEXION', ROOT.'config/connexion.php');
define ('CONNEXION_COOKIE', ROOT.'config/connexion_cookie.php');

define ('MODEL', ROOT.'model/');
define ('CONTROLLER', ROOT.'controller/');
define ('VIEW', ROOT.'view/');

define ('HEADER', VIEW.'reusable/header.php');
define ('FOOTER', VIEW.'reusable/footer.php');
define ('FIXED_MENU', VIEW.'reusable/menuFixed.php');
define ('FIXED_MENU_CONNECTED', VIEW.'reusable/menuFixedConnected.php');
define ('LEFT_MENU', VIEW.'reusable/menuLeft.php');
define ('CATEGORIES_MENU', VIEW.'reusable/menuCategories.php');

define ('ASSET', URL.'asset/');
define ('CSS', ASSET.'css/');
define ('JS', ASSET.'js/');
define ('IMG', ASSET.'img/');
define ('AJAX', ASSET.'js/ajax/');

define ('BOOTSTRAP_CSS', CSS.'bootstrap/');
define ('BOOTSTRAP_JS', JS.'bootstrap/');
define ('JQUERY', JS.'jquery/');

define ('CATEGORY', VIEW.'reusable/category.php');

define ('SALT', 'new_york_queens');
define ('SALT_POSITION', 3);
?>