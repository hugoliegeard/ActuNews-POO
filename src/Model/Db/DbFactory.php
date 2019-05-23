<?php


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
    public static function makePdo()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=actunews', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        return $pdo;
    }

}
