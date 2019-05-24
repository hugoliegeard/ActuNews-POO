<?php

/* --
 * Ici, ma classe DbFactory est déclarée
 * dans l'espace Model\Db;
 * --------------------------
 * Pour l'utiliser, je devrais dorénavant,
 * indiquer à PHP son emplacement.
 -- */
namespace Model\Db;

use PDO;

/**
 * Une Factory est une classe
 * capable de créer des objets.
 * ----------------------------
 * C'est aussi un design pattern.
 */
class DbFactory
{

    /**
     * Fabrique et retourne une instance de PDO.
     * ------------------------------------------
     * Une fonction statique est une fonction qui
     * appartient directement à la classe. De ce fait,
     * elle peut être appelée sans qu'une instance de l'objet
     * ait été crée.
     * ------------------------------------------
     * Une fonction static peut communiquer avec une autre
     * fonction static. Mais une fonction static ne peux pas
     * communiquer avec une fonction non static.
     * -------------------------------------------
     * @return PDO
     */
    public static function makePdo(): PDO
    {
        $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
            DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        return $pdo;
    }

}
