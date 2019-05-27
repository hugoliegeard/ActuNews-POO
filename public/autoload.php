<?php
/**
 * Cette fonction permet d'automatiser le chargement
 * des classes de notre projet.
 * -------------
 * Elle est appelé AUTOMATIQUEMENT par PHP dès qu'une
 * classe est instanciée et n'est pas chargée (require / include).
 */
spl_autoload_register(function ($class) {
    # echo 'autoload : '. $class . '<br>';
    require_once __DIR__ . '/../src/' . str_replace('\\',
            DIRECTORY_SEPARATOR, $class) . '.php';
});
