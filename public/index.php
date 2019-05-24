<?php

# Autochargement des classes

use Controller\DefaultController;
use Controller\MembreController;

# Chargement de l'autoload des classes
require_once 'autoload.php';

# Chargement de la configuration
require_once 'config.php';

# require_once '../src/Controller/DefaultController.php';
# require_once '../src/Controller/MembreController.php';

/*
 * Ici, notre fichier index.php représente
 * notre controleur frontal.
 * --------------------------
 * C'est donc lui qui se charge de rediriger
 * la requète de l'utilisateur vers le bon
 * controleur en s'aidant des paramètres dans l'URL !
 */

# Aperçu de $_GET
# echo '<pre>';
# print_r($_GET);
# echo '</pre>';

# Récupération des paramètres GET et affectation d'une valeur par défaut.
# https://www.php.net/manual/fr/language.operators.comparison.php#language.operators.comparison.coalesce
$controller = $_GET['controller'] ?? 'default';
$action     = $_GET['action'] ?? 'home';

# -- Section routage du front controller
$defaultCtrl = new DefaultController();
$membreCtrl = new MembreController();

if ($controller == 'default' && $action == 'home') {
    # echo '<h1>JE SUIS LA PAGE ACCUEIL</h1>';
    $defaultCtrl->home();
}

if ($controller == 'default' && $action == 'categorie') {
    # echo '<h1>JE SUIS LA PAGE CATEGORIE</h1>';
    $defaultCtrl->categorie();
}

if ($controller == 'default' && $action == 'article') {
    # echo '<h1>JE SUIS LA PAGE ARTICLE</h1>';
    $defaultCtrl->article();
}

if ($controller == 'membre' && $action == 'inscription') {
    # echo '<h1>JE SUIS LA PAGE INSCRIPTION</h1>';
    $membreCtrl->inscription();
}

if ($controller == 'membre' && $action == 'connexion') {
    $membreCtrl->connexion();
}

if ($controller == 'membre' && $action == 'profil') {
    $membreCtrl->profil();
}