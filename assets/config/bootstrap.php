<?php

// Fichier de config principal

// __DIR__ est une "constante magique"
// elle retourne le chemin du dossier du fichier dans lequel on l'appelle
require __DIR__ . '/param.php';

require __DIR__ . '/bdd.php';

require __DIR__  . '/class/Alert.php';

require __DIR__  . '/class/User.php';


$user = new User();

session_start();