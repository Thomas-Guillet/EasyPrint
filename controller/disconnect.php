<?php
include_once '../config/constantes.php';

session_start();

session_destroy();
$_SESSION = [];

header('Location: '.URL);  