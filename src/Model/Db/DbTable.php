<?php


namespace Model\Db;


/**
 * Class DbTable
 * @package Model\Db
 */
abstract class DbTable
{
    # Nom de la table
    protected $table;

    # Clé primaire
    protected $primary = 'id';

    # Instance PDO
    private $db;

    public function __construct()
    {
        # Récupération de l'instance de PDO
        $this->db = DbFactory::makePdo();
    }

    /**
     * Permet de récupérer toutes les
     * informations d'une table dans la BDD.
     * @param string $where
     * @param string $orderBy
     * @param string $limit
     * @param string $offset
     * @return array
     */
    public function findAll(
        string $where = '',
        string $orderBy = '',
        string $limit = '',
        string $offset = ''
    ): array {
        # Requète SELECT
        $sql = "SELECT * FROM " . $this->table;

        # Si $where n'est pas vide
        if (!empty($where)) {
            $sql .= ' WHERE ' . $where;
        }

        # Si $orderBy n'est pas vide
        if (!empty($orderBy)) {
            $sql .= ' ORDER BY ' . $orderBy;
        }

        # Si $limit n'est pas vide
        if (!empty($limit)) {
            $sql .= ' LIMIT ' . (int)$limit;
        }

        # Si $offset n'est pas vide
        if (!empty($offset)) {
            $sql .= ' OFFSET ' . (int)$offset;
        }

        /* --
         * En fonction des paramètres passés,
         * ma requète SQL va ce construire successivement.
         -- */

        # Préparation et Execution de la requète.
        $query = $this->db->prepare($sql);
        $query->execute();

        # On retourne le résultat
        return $query->fetchAll();

    }

    /**
     * Récupère un Enregistrement dans la BDD pour l'ID
     * et la colonne passée en paramètres.
     * @param $id
     * @param string $column
     * @return mixed
     */
    public function findOne($id, $column = '') {

        if($column == '') {
            $column = $this->primary;
        }

        $sth = $this->db->prepare('SELECT * FROM '.$this->table.' WHERE '.$column.' = :id');
        $sth->bindValue(':id', (int) $id, \PDO::PARAM_INT);
        $sth->execute();

        return $sth->fetch();

    }

}